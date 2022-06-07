<?php sleep(1);?>
<div class="container px-2 py-2">
    <a href="<?php echo URL;?>home" title="homepage" class="btn lg-blue text-light"><i class="bi bi-arrow-left"></i>
        Back</a>
</div>
<div class="col-12 col-md-7 col-lg-5 py-3 mx-auto">
    <div class="p-3">
        <form method="POST" class="p-3 p-lg-5 lg-blue rounded">

            <div class="text-light text-center mb-4">
                <h4 class="text-uppercase">Register</h4>
                <small>Just by registering you are going to get a 15% OFF.</small>
                <hr class="mx-auto">
            </div>
            <div class="mb-3 text-center bg-danger text-light">
                <p class=""><?php echo $data['error'] ?? NULL;?></p>
            </div>
            <div class="form-floating mb-2">
                <input type="text" name="firstname" class="form-control" id="floatingInput"
                    placeholder="Your first name" required>
                <label for="floatingInput">First name</label>
                <div class="mt-1 px-1 text-light bg-danger">
                    <?php echo $data['firstname'] ?? NULL;?>
                </div>
            </div>
            <div class="form-floating mb-2">
                <input type="text" name="surname" class="form-control" id="floatingInput" placeholder="Your Username"
                    required>
                <label for="floatingInput">Surname</label>
                <div class="mt-1 px-1 text-light bg-danger">
                    <?php echo $data['surname'] ?? NULL;?>
                </div>
            </div>
            <div class="form-floating mb-2">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com"
                    required>
                <label for="floatingInput">Email address</label>
                <div class="mt-1 px-1 text-light bg-danger">
                    <?php echo $data['email'] ?? NULL;?>
                </div>
            </div>
            <div class="form-floating mb-2">
                <input type="text" name="contact" class="form-control" id="floatingInput" placeholder="Phone Number"
                    required>
                <label for="floatingInput">Phone Number</label>
                <div class="mt-1 px-1 text-light bg-danger">
                    <?php echo $data['contact'] ?? NULL;?>
                </div>
            </div>
            <div class="form-floating mb-2">
                <input type="text" name="location" class="form-control" id="floatingInput" placeholder="Your Location"
                    required>
                <label for="floatingInput">Location / Area</label>
                <div class="mt-1 px-1 text-light bg-danger">
                    <?php echo $data['location'] ?? NULL;?>
                </div>
            </div>
            <div class="form-floating mb-2">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password"
                    required>
                <label for="floatingPassword">Password</label>
                <div class="mt-1 px-1 text-light bg-danger">
                    <?php echo $data['password'] ?? NULL;?>
                </div>
            </div>
            <button class="w-100 mt-4 btn btn-lg lg-scooter hover-1 text-light" name="register" type="submit">
                <i class="bi bi-send"></i> Submit
            </button>
            <br><br>


            <div class="modal-footer lg-red mt-2">
                <a href="<?php echo URL;?>login" class="text-light text-decoration-none" style="cursor:pointer;">
                    Already registered? click here to Login.
                </a>
            </div>
        </form>
    </div>
</div>
<script src="assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>