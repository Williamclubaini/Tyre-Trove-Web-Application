<?php $error = $data->Login();?>
<main class="mx-auto col-11 col-md-6 col-lg-5" style="padding-top:12rem!important;">
    <form method="post" class="border lg-blue border-body rounded p-3 needs-validation" novalidate>
        <div class="mb-5">
            <div class="d-flex justify-content-center">
                <img class="mb-1" src="assets/images/logo/logo.png" width="72" height="57">
            </div>
            <p class="text-center mb-3 lh-1">
                <span class="h3 fw-bold text-light fw-normal">Welcome Back!</span> <br>
                <span class="fst-italic text-light">Sign in to your account to continue.</span>
            </p>
        </div>

        <div class="mb-3 form-floating">
            <input type="email" name="email" class="form-control" placeholder="name@example.com" required>
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback">
                Please email is required.
            </div>
            <small class="text-light bg-danger mb-4 fw-bold">
                <?php echo $error['email'] ?? NULL;?>
            </small>
            <label><i class="bi bi-envelope"></i> Email address</label>
        </div>

        <div class="form-floating">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback">
                Please password is required.
            </div>
            <small class="text-light bg-danger mb-4 fw-bold">
                <?php echo $error['password'] ?? NULL;?>
            </small>
            <label><i class="bi bi-key"></i> Password</label>
        </div>

        <div class="checkbox text-start mt-3 mb-3">
            <label class="text-light">
                <input type="checkbox" value="remember-me" required> Remember me
            </label>
        </div>

        <button name="Login" type="submit" class="w-100 btn btn-lg my-blue-theme hover-1 text-light">
            <i class="bi bi-box-arrow-in-right"></i>
            Sign in</button>
        <p class="mt-4 mb-3 text-start text-muted">
            <span class="text-light fw-light fst-italic">
                © 2020 – 2022 | Tyre Trove
            </span>
        </p>
    </form>
</main>