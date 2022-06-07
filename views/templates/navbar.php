<body data-bs-spy="scroll" data-bs-target="#navbarsExample07XL">
    <div class="loader">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <section class="main">
        <!-- home section -->
        <section id="home">

            <div class="d-flex justify-content-center py-3 text-light my-blue-theme">
                <?php 
             sleep(2);
            {?>
                <a href="javascript:void(0)"
                    class="text-light pointer px-2 px-lg-3 align-self-center text-decoration-none">
                    <i class="bi bi-envelope"></i> tyretrove@gmail.mw.org
                </a>

                <a class="text-light pointer px-2 px-lg-3 align-self-center text-decoration-none">
                    <i class="bi bi-telephone"></i> +265 99 23 28 229
                </a>

                <?php 
session_start();
                 if (!isset($_SESSION['user'])) {?>
                <a href="<?php echo URL;?>login" class="btn px-2 px-lg-3 btn-outline-light">
                    <i class="bi bi-box-arrow-in-right"></i> Login
                </a>
                <?php } elseif (isset($_SESSION['user'])) {?>
                <a href="<?php echo URL;?>userAccount" class="btn px-2 px-lg-3 btn-outline-light">
                    <i class="bi bi-box-arrow-in-right"></i> Dashboard
                </a>
                <?php } ?>

            </div>

            <!-- Navigation -->
            <nav class="navbar p-2 navbar-expand-lg navbar-dark black" aria-label="Ninth navbar example">
                <div class="container-xl">
                    <a class="text-decoration-none" href="<?php echo URL;?>home">
                        <img class="logo" src="assets/images/logo/logo.png" alt="" width="85" height="45">
                    </a>
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-collapse justify-content-center collapse" id="navbarsExample07XL">
                        <ul class="navbar-nav mt-2 align-items-center mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo URL;?>home#home"><i class="bi bi-house"></i>
                                    Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo URL;?>home#about"><i class="bi bi-info-circle"></i>
                                    About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo URL;?>home#services"><i class="bi bi-tools"></i>
                                    Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo URL;?>home#shop"><i class="bi bi-cart"></i>
                                    Shop</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo URL;?>home#contact"><i class="bi bi-telephone"></i>
                                    Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo URL;?>help"><i class="bi bi-info-square"></i>
                                    Help</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo URL;?>faq"><i class="bi bi-question-circle"></i>
                                    FAQ</a>
                            </li>
                        </ul>
                        <?php if (!isset($_SESSION['user'])) {?>
                        <a href="<?php echo URL;?>register" class="btn register-btn blue-btn rounded-pill">
                            <span data-bs-toggle="tooltip" data-bs-placement="bottom" title="15% OFF on Registering">
                                <i class="bi bi-person-plus-fill"></i> Register</span>
                        </a>
                        <?php } elseif(isset($_SESSION['user']))
                        {?>
                        <a href="<?php echo $_SERVER['REQUEST_URI'].'&logout';?>"
                            class="btn register-btn blue-btn rounded-pill">
                            <span data-bs-toggle="tooltip" data-bs-placement="bottom" title="15% OFF on Registering">
                                <i class="bi bi-box-arrow-in-left" aria-hidden="true"></i> Log Out</span>
                        </a>
                        <?php }?>
                    </div>
                </div>
            </nav>
            <?php }?>