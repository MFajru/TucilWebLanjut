<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="/css/loginstyle.css" type="text/css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
    <title>REGISTRASI</title>
</head>

<div class="container h-80">
    <div class="row align-items-center h-100">
        <div class="col-3 mx-auto">
            <div class="text-center">
                <img id="profile-img" class="rounded-circle profile-img-card" src="/img/register.jpg" />
                <p id="profile-name" class="profile-name-card"></p>
                <center>
                    <h3>REGISTRATION FORM</h3>
                </center>

                <?php $validation = session()->getFlashData('validation'); ?>

                <form action="<?= current_url() ?> " method='POST' class="form-signin">
                    <input value="<?= old('first_name') ?>" type="text" name="first_name" id="first_name" class="form-control <?= $validation && $validation->hasError('first_name') ? ' is-invalid' : '' ?>" placeholder="First Name">
                    <?php if ($validation && $validation->hasError('first_name')) : ?>
                        <div class="invalid-feedback">
                            <?= $validation->getError('first_name'); ?>
                        </div>
                    <?php endif; ?>
                    <input value="<?= old('last_name') ?>" type="text" name="last_name" id="last_name" class="form-control <?= $validation && $validation->hasError('last_name') ? ' is-invalid' : '' ?>" placeholder="Last Name">
                    <?php if ($validation && $validation->hasError('last_name')) : ?>
                        <div class="invalid-feedback">
                            <?= $validation->getError('last_name'); ?>
                        </div>
                    <?php endif; ?>
                    <input value="<?= old('email') ?>" type="email" name="email" id="email" class="form-control <?= $validation && $validation->hasError('email') ? ' is-invalid' : '' ?>" placeholder="E-Mail">
                    <?php if ($validation && $validation->hasError('email')) : ?>
                        <div class="invalid-feedback">
                            <?= $validation->getError('email'); ?>
                        </div>
                    <?php endif; ?>
                    <input value="<?= old('username') ?>" type="text" name="username" id="username" class="form-control <?= $validation && $validation->hasError('username') ? ' is-invalid' : '' ?>" placeholder="Username">
                    <?php if ($validation && $validation->hasError('username')) : ?>
                        <div class="invalid-feedback">
                            <?= $validation->getError('username'); ?>
                        </div>
                    <?php endif; ?>
                    <input value="<?= old('password') ?>" type="password" name="password" id="password" class="form-control <?= $validation && $validation->hasError('password') ? ' is-invalid' : '' ?>" placeholder="Password">
                    <?php if ($validation && $validation->hasError('password')) : ?>
                        <div class="invalid-feedback">
                            <?= $validation->getError('password'); ?>
                        </div>
                    <?php endif; ?>
                    <input value="<?= old('cpassword') ?>" type="password" name="cpassword" id="cpassword" class="form-control <?= $validation && $validation->hasError('cpassword') ? ' is-invalid' : '' ?>" placeholder="Confirm Password">
                    <?php if ($validation && $validation->hasError('cpassword')) : ?>
                        <div class="invalid-feedback">
                            <?= $validation->getError('cpassword'); ?>
                        </div>
                    <?php endif; ?>
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">SIGN UP</button>
                </form><!-- /form -->
            </div>
        </div>
    </div>
</div>