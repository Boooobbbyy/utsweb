<?= $this->extend('layout/templete_login'); ?>
<?= $this->section('content'); ?>

<div class="container h-100 pt-5">
    <div class="row align-itemes-center h-100 align-middle">
        <div class="col-6 mx-auto">
            <div class="jumbotron">
                <center>
                    <h3>LOGIN FORM</h3>
                </center>

                <?php if (session()->getFlashdata('msg')) : ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                <?php endif; ?>
                <form action="/auth/masuk " method='POST'>
                    <div class="mb-3">
                        <label for="InputForEmail" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="InputForPassword">
                    </div>
                    <button class="btn btn-success btn-block">SIGN IN</button>
                    <span class="dark-color d-inline-block line-height-2">Belum daftar? <a href="/auth/registrasi">Daftar disini</a></span>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>