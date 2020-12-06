<?= $this->extend('layout/templete'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <center>
                <h2 class="mt-3"><?= $buku['judul']; ?></h2>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="/img/<?= $buku['sampul']; ?>" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"><b>Penulis : </b><?= $buku['penulis']; ?></p>
                        <p class="card-text"><b>Penerbit : </b><?= $buku['penerbit']; ?></p>
                        <a href="/pages" class="btn btn-secondary">kembali ke daftar</a>
                    </div>
                </div>
            </center>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>