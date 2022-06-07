<!-- Login form -->
<div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content shadow-lg">
            <form method="POST" class="needs-validation" novalidate>
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-5">
                        <img class="img-fluid" style="height:55px!important;" src="assets/images/logo/logo.png"
                            height="10">
                        <h4 class="fw-bold blue-text">Login</h4>
                        <!-- <hr class="w-75 mx-auto"> -->
                    </div>
                    <label>Email</label>
                    <div class="form-floating mb-2">
                        <input type="email" name="email" class="form-control" id="floatingInput"
                            placeholder="name@example.com" required>
                        <label for="floatingInput"><i class="bi bi-envelope"></i> Email address</label>
                        <div class="valid-feedback">
                            Okay!
                        </div>
                        <div class="invalid-feedback">
                            invalid email address!
                        </div>
                    </div>
                    <label>Password</label>
                    <div class="form-floating mb-2">
                        <input type="password" name="password" class="form-control" id="floatingPassword"
                            placeholder="Password" required>
                        <label for="floatingPassword"><i class="bi bi-key"></i> Password</label>
                        <span class="text-danger">
                            <em>Note: At least password must contain one special character.</em>
                        </span>
                        <div class="valid-feedback">
                            Okay!
                        </div>
                        <div class="invalid-feedback">
                            Password cannot be empty!
                        </div>
                    </div>
                    <button class="w-100 mt-4 btn btn-lg btn-primary" name="login" type="submit">
                        <i class="bi bi-box-arrow-in-right"></i> Sign in
                    </button>

                    <br><br>

                    <a data-bs-toggle="modal" data-bs-target="#register" class="text-decoration-none"
                        style="cursor:pointer;">
                        <i class="bi bi-person-plus-fill"></i> Register now.
                    </a> <br>
                    <a data-bs-toggle="modal" data-bs-target="#register" class="text-decoration-none"
                        style="cursor:pointer;">
                        <i class="bi bi-unlock"></i> Reset your password.
                    </a>

                </div>
                <div class="modal-footer mt-2">
                    <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Login Form -->