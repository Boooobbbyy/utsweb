<?php

namespace App\Controllers;

use App\Models\PagesModel;

class Pages extends BaseController
{
    protected $pagesModel;
    public function __construct()
    {
        $this->pagesModel = new PagesModel();
    }
    public function index()
    {
        // $buku = $this->pagesModel->findAll();
        $currentPage = $this->request->getVar('page_buku') ?  $this->request->getVar('page_buku') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $buku = $this->pagesModel->search($keyword);
        } else {
            $buku = $this->pagesModel;
        }

        $data = [
            'title' => 'E-Library | Dashboard',
            'buku' => $buku->paginate(5, 'buku'),
            'pager' => $this->pagesModel->pager,
            'currentPage' => $currentPage
        ];

        echo view('pages/index', $data);
    }
    public function databuku()
    {
        // $buku = $this->pagesModel->findAll();

        $data = [
            'title' => 'Data Buku',
            'buku' => $this->pagesModel->getBuku()
        ];

        echo view('pages/databuku', $data);
    }
    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Buku',
            'buku' => $this->pagesModel->getBuku($slug)

        ];
        if (empty($data['buku'])) {
            throw new \Codeigniter\Exceptions\PageNotFoundException('judul buku' . $slug . 'tidak ditemukan');
        }


        return view('pages/detail', $data);
    }
    public function create()
    {
        // session();
        $data = [
            'title' => 'Form Tambah Buku',
            'validation' => \Config\Services::validation()
        ];
        return view('pages/create', $data);
    }
    public function save()
    {
        if (!$this->validate([
            'kode' => 'required',
            'judul' => 'required|is_unique[buku.judul]',
            'penulis' => 'required',
            'penerbit' => 'required',

        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/pages/create')->withInput()->with('validation', $validation);
        }
        $fileSampul = $this->request->getFile('sampul');
        $fileSampul->move('img');
        $namaSampul = $fileSampul->getName();

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->pagesModel->save([
            'kode' => $this->request->getVar('kode'),
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $namaSampul

        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to('/');
    }
    public function delete($id)
    {
        $buku = $this->pagesModel->find($id);
        unlink('img/' . $buku['sampul']);
        $this->pagesModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/pages/databuku');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Form Edit Buku',
            'validation' => \Config\Services::validation(),
            'buku' => $this->pagesModel->getBuku($slug)
        ];
        return view('pages/edit', $data);
    }
    public function update($id)
    {
        $bukulama = $this->pagesModel->getBuku($this->request->getVar('slug'));
        if ($bukulama['judul'] == $this->request->getVar('judul')) {
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[buku.judul]';
        }
        if (!$this->validate([
            'kode' => 'required',
            'judul' => $rule_judul,
            'penulis' => 'required',
            'penerbit' => 'required',



        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/pages/edit/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
        }

        $fileSampul = $this->request->getFile('sampul');
        if ($fileSampul->getError() == 4) {
            $namaSampul = $this->request->getVar('sampulLama');
        } else {
            $namaSampul = $fileSampul->getName();
            $fileSampul->move('img', $namaSampul);
            unlink('img/' . $this->request->getVar('sampulLama'));
        }


        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->pagesModel->save([
            'id' => $id,
            'kode' => $this->request->getVar('kode'),
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $namaSampul

        ]);
        session()->setFlashdata('pesan', 'Data berhasil diubah');
        return redirect()->to('/');
    }
}
