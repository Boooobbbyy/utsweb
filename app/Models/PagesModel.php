<?php

namespace App\Models;

use CodeIgniter\Model;

class PagesModel extends Model
{
    protected $table = 'buku';
    protected $useTimestamps = true;
    protected $allowedFields = ['kode', 'judul', 'slug', 'penulis', 'penerbit', 'sampul'];

    public function getBuku($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
    public function search($keyword)
    {
        // $builder = $this->table('buku');
        // $builder->like('judul', $keyword);
        // return $builder;
        return $this->table('buku')->like('judul', $keyword);
    }
}
