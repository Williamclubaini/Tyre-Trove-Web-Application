    <header class="navbar navbar-dark sticky-top my-blue-theme flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"> <img class="img-fluid"
                style="height:40px!important;" src="assets/images/logo/logo.png"></a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </header>
    <div class="container-fluid">
        <div class="row">
            <div class="container-fluid">
                <div class="row">
                    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                        <div class="position-sticky pt-3">
                            <?php  
  if(isset($_SESSION['user']))
  {?>
                            <?php sleep(1);?>
                            <ul class="nav nav-pills mb-auto flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo URL;?>userAccount">
                                        <i class="bi bi-house"></i>
                                        Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo URL;?>shop">
                                        <i class="bi bi-cart2"></i>
                                        Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo URL;?>bookAppointment">
                                        <i class="bi bi-book"></i>
                                        Book Appointment</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo URL;?>cart">
                                        <i class="bi bi-bag"></i> Cart
                                        <span class="badge bg-danger rounded-pill">
                                            <?php
          if(isset($_SESSION['cart']))
          {
            echo count($_SESSION['cart']);
          } else {
            echo 0;
          }
        ;?></span></a>
                                </li>
                            </ul>

                            <h6
                                class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                                <span>Reports</span>
                                <a class="link-secondary" href="#" aria-label="Add a new report">
                                    <span data-feather="plus-circle"></span>
                                </a>
                            </h6>
                            <ul class="nav flex-column mb-2">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo URL;?>appointments">
                                        <i class="bi bi-book"></i>
                                        Appointments</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo URL;?>purchase">
                                        <i class="bi bi-currency-dollar"></i>
                                        Purchase Records</a>
                                </li>
                            </ul>

                            <h6
                                class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                                <span>System</span>
                                <a class="link-secondary" href="#" aria-label="Add a new report">
                                    <span data-feather="plus-circle"></span>
                                </a>
                            </h6>
                            <ul class="nav flex-column mb-2">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo URL;?>help">
                                        <i class="bi bi-info-square"></i>
                                        Help</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo URL;?>faq">
                                        <i class="bi bi-question-circle"></i>
                                        FAQ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo URL;?>settings">
                                        <i class="bi bi-gear"></i>
                                        Settings</a>
                                </li>


                                <!-- === ADMIN NAVIGATION === -->
                                <?php } elseif(isset($_SESSION['admin']))
  {?>
                                <?php sleep(1);?>

                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="active nav-link" href="<?php echo URL;?>adminAccount">
                                            <i class="bi bi-house"></i>
                                            Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo URL;?>adminAppointments">
                                            <i class="bi bi-calendar2"></i>
                                            Appointments</a>
                                        <span class="msg-counter"><?php //echo $data[0]->numbersOfRecords;?></span>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo URL;?>adminProducts">
                                            <i class="bi bi-cart3"></i>
                                            Products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo URL;?>addProducts">
                                            <i class="bi bi-plus-circle"></i>
                                            Add New Product</a>
                                    </li>
                                </ul>

                                <h6
                                    class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                                    <span>Report</span>
                                    <a class="link-secondary" href="#" aria-label="Add a new report">
                                        <span data-feather="plus-circle"></span>
                                    </a>
                                </h6>
                                <ul class="nav flex-column mb-2">
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo URL;?>adminSalesReport">
                                            <i class="bi bi-bar-chart-line"></i>
                                            Sales Report</a>
                                    </li>
                                </ul>

                                <h6
                                    class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                                    <span>System</span>
                                    <a class="link-secondary" href="#" aria-label="Add a new report">
                                        <span data-feather="plus-circle"></span>
                                    </a>
                                </h6>
                                <ul class="nav flex-column mb-2">
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo URL;?>adminUsers">
                                            <i class="bi bi-people"></i>
                                            Customers</a>
                                    </li>
                                    <?php }?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo $_SERVER['REQUEST_URI'].'&logout';?>">
                                            <i class="bi bi-box-arrow-in-left" aria-hidden="true"></i>
                                            Log Out
                                        </a>
                                    </li>
                                </ul>
                        </div>
                    </nav>