<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="/css/loginstyle.css" type="text/css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
    <title>LOGIN</title>
</head>
<div class="container h-80">
    <div class="row align-items-center h-100">
        <div class="col-3 mx-auto">
            <div class="text-center">
                <img id="profile-img" class="rounded-circle profile-img-card" src="/img/profile.jpg" />
                <p id="profile-name" class="profile-name-card"></p>
                <?php $validation  = session()->getFlashdata('validation'); ?>
                <form action="<?= current_url() ?> " method='POST' class="form-signin">

                    <input type="text" name="username" id="inputusername" class="form-control <?= $validation && $validation->hasError('username') ? ' is-invalid' : '' ?>" placeholder="Username">
                    <?php if ($validation && $validation->hasError('username')) : ?>
                        <div class="invalid-feedback">
                            <?= $validation->getError('username'); ?>
                        </div>
                    <?php endif; ?>
                    <input type="password" name="password" id="inputPassword" class="form-control <?= $validation && $validation->hasError('password') ? ' is-invalid' : '' ?>" placeholder="Password">
                    <?php if ($validation && $validation->hasError('password')) : ?>
                        <div class="invalid-feedback">
                            <?= $validation->getError('password'); ?>
                        </div>
                    <?php endif; ?>
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">SIGN IN</button>
                </form><!-- /form -->
            </div>
        </div>
    </div>
</div>