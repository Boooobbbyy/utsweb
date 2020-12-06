<?= $this->extend('layout/templete_login'); ?>
<?= $this->section('content'); ?>

<div class="container h-100 pt-5">
    <div class="row align-itemes-center h-100 align-middle">
        <div class="col-6 mx-auto">
            <div class="jumbotron">
                <center>
                    <h3>LOGIN FORM</h3>
                </center>
                <?php if (isset($validation)) : ?>
                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                <?php endif; ?>

                <form action="/auth/save " method='POST'>
                    <div class="mb-3">
                        <label for="InputForName" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="InputForName" value="<?= set_value('username') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForEmail" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="InputForPassword">
                    </div>
                    <div class="mb-3">
                        <label for="InputForConfPassword" class="form-label">Confirm Password</label>
                        <input type="password" name="confpassword" class="form-control" id="InputForConfPassword">
                    </div>
                    <button class="btn btn-success btn-block">SIGN UP</button>
                    <span class="dark-color d-inline-block line-height-2">Sudah punya akun ? <a href="/auth/login">Login</a></span>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>