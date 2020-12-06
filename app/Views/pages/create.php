<?= $this->extend('layout/templete'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">

            <h2 class="my-4">Tambah Data Komik</h2>

            <form action="/pages/save" method="post">

                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="kode" class="col-sm-2 col-form-label">kode Buku</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('kode')) ? 'is-invalid' : ''; ?>" id="kode" name="kode">
                        <div class="invalid-feedback">
                            <?= $validation->getError('kode'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control  <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul">
                        <div class="invalid-feedback">
                            <?= $validation->getError('judul'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control  <?= ($validation->hasError('penulis')) ? 'is-invalid' : ''; ?>" id="penulis" name="penulis">
                        <div class="invalid-feedback">
                            <?= $validation->getError('penulis'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="penerbit" class="col-sm-2 col-form-label">penerbit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control  <?= ($validation->hasError('penerbit')) ? 'is-invalid' : ''; ?> " id="penerbit" name="penerbit">
                        <div class="invalid-feedback">
                            <?= $validation->getError('penerbit'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="sampul" name="sampul">
                    </div>
                </div>


                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>