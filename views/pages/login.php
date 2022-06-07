<?php sleep(2);?>
<div class="container px-2 py-2">
    <a href="<?php echo URL;?>home" title="homepage" class="btn lg-blue text-light"><i class="bi bi-arrow-left"></i>
        Back</a>
</div>
<div class="col-12 col-md-7 col-lg-5 py-5 mx-auto">
    <br>
    <div class="p-3">
        <form method="POST" class="p-3 p-lg-5 lg-blue rounded">

            <div class="text-center mb-5">
                <img class="img-fluid" style="height:100px!important;" src="assets/images/logo/logo.png" height="10">
                <h1 class="fw-bold text-light">Login</h1>
                <hr class="mx-auto bg-light">
            </div>

            <div class="fw-bold <?php echo $data['color'] ?? 'bg-danger';?> text-center mb-4 text-light">
                <?php echo $data['msg'] ?? NULL; ?>
            </div>


            <label class="text-light">Email</label>
            <div class="form-floating mb-2">
                <input type="email" name="email" class="form-control" id="floatingInput"
                    value="<?php echo $data['email'] ?? NULL;?>" required>
                <label for="floatingInput"><i class="bi bi-envelope"></i> Email address</label>
            </div>



            <label class="text-light">Password</label>
            <div class="form-floating mb-2">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password"
                    required>
                <label for="floatingPassword"><i class="bi bi-key"></i> Password</label>
                <small class="text-light bg-danger py-1 fw-bold">
                    <?php echo $data['password'] ?? NULL;?>
                </small>
            </div>
            <?php 
                  if(isset($data['lock']))
                  {?>
            <button class="w-100 mt-4 btn btn-lg lg-scooter hover-1 text-light" name="login" type="submit"
                <?php echo $data['lock'] ?? NULL;?>>
                <script type="text/javascript">
                setTimeout(function() {
                    window.location.assign("http://localhost/tyre-trove/index.php?page=login");
                }, 600000)
                </script>
                <?php }
                  else 
                  {?>
                <button class="w-100 mt-4 btn btn-lg lg-scooter hover-1 text-light" name="login" type="submit">
                    <?php }
            ?>
                    <i class="bi bi-box-arrow-in-right"></i> Sign in
                </button>

                <br><br>

                <br>


                <div class="modal-footer lg-red mt-2">
                    <a href="<?php echo URL;?>register" class="text-decoration-none text-light" style="cursor:pointer;">
                        <i class="bi bi-person-plus-fill"></i> Not registered? Register now.
                    </a>
                    <br>
                    <a href="<?php echo URL;?>reset" class="text-decoration-none text-light" style="cursor:pointer;">
                        <i class="bi bi-unlock"></i> Reset your password.
                    </a>
                </div>


        </form>
    </div>
</div>
<script src="assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>