<?php sleep(2);?>
<div class="container px-2 py-2">
    <a href="<?php echo URL;?>home" title="homepage" class="btn lg-blue text-light"><i class="bi bi-arrow-left"></i>
        Back</a>
</div>
<br><br><br><br>
<main class="mx-auto col-5 lg-blue">
    <form method="POST" class="p-5">
        <h1 class="h3 mb-4 text-center text-light fw-normal">
            <i class="bi bi-lock"></i> Reset your password
        </h1>

        <div class="fw-bold rounded <?php echo $data['color'] ?? 'bg-transparent';?> text-center mb-4 text-light">
            <?php echo $data['msg'] ?? NULL;?>
        </div>

        <div class="form-floating">
            <input type="email" name="email" value="<?php echo $data['email'] ?? NULL;?>" class="form-control"
                id="floatingInput" required>
            <label for="floatingInput"><i class="bi bi-envelope"></i> Your email address</label>
        </div>
        <br>
        <div class="form-floating">
            <input type="password" name="password" class="form-control" id="floatingInput" required>
            <label for="floatingPassword"><i class="bi bi-lock"></i> Password</label>
            <div class="bg-danger text-light mt-2 px-2 fw-bold">
                <?php echo $data['password'] ?? NULL;?>
            </div>
        </div>

        <div class="checkbox mb-3">
            <br>
            <label class="text-light">
                <input type="checkbox" required> Are you sure you want to update your password?
            </label>
        </div>
        <button class="w-100 btn btn-lg lg-scooter text-light" name="reset" type="submit"><i class="bi bi-send"></i>
            Sign
            in</button>
        <br><br><br>
        <div class="p-2 lg-red mt-2">
            <a href="<?php echo URL;?>login" class="text-decoration-none text-light" style="cursor:pointer;">
                <i class="bi bi-arrow-right"></i> Login now.
            </a>
        </div>
        <br>
        <p class="mt-5 mb-3 text-light">© 2017 – 2021</p>
    </form>
</main>