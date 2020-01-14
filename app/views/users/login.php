<?php require APP_ROOT . '/views/inc/header.php'?>
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-5">
            <?php flash('register_success'); ?>
            <h2>Login</h2>
            <p>Please fill in your credentials to log in</p>
            <form action="<?php echo URL_ROOT; ?>/users/login" method="post">
                <div class="form-group">
                    <label for="email">Email: <sup>*</sup></label>
                    <input
                        type="text"
                        class="form-control form-control-lg <?php echo (!empty($data['email_error'])) ? 'is-invalid' : ''; ?>"
                        name="email"
                        value="<?php echo $data['email'] ?>
                    ">
                    <span class="invalid-feedback"><?php echo $data['email_error'] ?></span>
                </div>
                <div class="form-group">
                    <label for="password">Password: <sup>*</sup></label>
                    <input
                        type="text"
                        class="form-control form-control-lg <?php echo (!empty($data['password_error'])) ? 'is-invalid' : ''; ?>"
                        name="password"
                        value="<?php echo $data['password'] ?>
                    ">
                    <span class="invalid-feedback"><?php echo $data['password_error'] ?></span>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="submit" value="Login" class="btn btn-success btn-block">
                    </div>
                    <div class="col">
                        <a href="<?php echo URL_ROOT; ?>/users/login" class="btn btn-light btn-block">No an account? Register</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require APP_ROOT . '/views/inc/footer.php'?>