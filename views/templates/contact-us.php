<?php 
$error = $data->issetContact();
?>
<!--  Contact us -->
<section id="contact" class="bg-light">
    <div class="container this-contact">
        <header class="text-center mb-5 black-text">
            <h1><span class="blue text-light p-2">Contact</span><span class="red text-light p-1">Us</span></h1>
            <p class="col-lg-8 pt-1 mx-auto">
                If you have any queries you can contact us through the form below. Our customers care team is ready to
                hear from you.
            </p>
            <hr class="mx-auto" style="width:65%!important;">
        </header>
        <div class="container p-4">
            <form Method="POST" class="col-12 col-md-11 col-lg-7 mx-auto row needs-validation" novalidate>
                <div class="col-md-12 mb-2">
                    <label for="fullname" class="form-label text-dark">Full name</label>
                    <input type="text" name="name" class="form-control" id="fullname" placeholder="name" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Your name is required!
                    </div>
                    <div class="text-danger fw-bold">
                        <?php echo $error['fullname'] ?? NULL;?>
                    </div>
                </div>
                <div class="col-md-12 mb-2">
                    <label for="email" class="form-label text-dark">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="jondoe003@gmail.com"
                        required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Email is required!
                    </div>
                    <div class="text-danger fw-bold">
                        <?php echo $error['email'] ?? NULL;?>
                    </div>
                </div>
                <div class="col-md-12 mb-2">
                    <label for="subject" class="form-label text-dark">Subject</label>
                    <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please furnish us with a subject!
                    </div>
                    <div class="text-danger fw-bold">
                        <?php echo $error['subject'] ?? NULL;?>
                    </div>
                </div>
                <div class="col-md-12 mb-2">
                    <label for="message" class="form-label text-dark">Message</label>
                    <textarea class="form-control" name="message" id="message" placeholder="Message" rows="5"
                        required></textarea>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please message is required!
                    </div>
                    <div class="text-danger fw-bold">
                        <?php echo $error['message'] ?? NULL;?>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck3" required>
                        <label class="form-check-label" for="invalidCheck3">
                            Agree to <a href="javascript:void(0)" class="text-decoration-none">terms and
                                conditions</a>
                        </label>
                    </div>
                </div>
                <div class="col-12 text-center p-3 p-lg-5">
                    <button class="btn blue-btn rounded-pill" name="contact" type="submit">Submit form</button>
                </div>
            </form>
        </div>
    </div>
</section>