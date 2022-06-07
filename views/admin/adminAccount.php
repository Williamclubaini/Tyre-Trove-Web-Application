<?php  
$usersNum    = $data['usersNum'][0]->numbersOfRecords;
$bookNum     = $data['numAppointments'][0]->numbersOfRecords;
$productsNum = $data['productsNumber'][0]->numbersOfRecords;
$profits     = $data['profits'][0]->sumOfRecords;
$salesNum    = $data['salesNumber'][0]->numbersOfRecords;
$bookRecords = $data['bookRecords']; 
?>
<!-- ! Main -->
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h5 class="fw-normal">Welcome, <?php echo USER->firstname;?>.</h5>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <a href="<?php echo URL;?>AdminAppointments" type="button"
                class="btn btn-sm text-light my-blue-theme hover-1">
                <i class="bi bi-book"></i> Appointment(s)
                <span class="badge bg-danger"><?php echo $bookNum;?></span>
            </a>

            <?php 
            if($salesNum > 0):?>
            <a href="<?php echo URL;?>AdminSalesReport" type="button" class="btn btn-sm text-light hover-1 lg-subu">
                <i class="bi bi-bar-chart-line"></i> Sales Report
                <span class="spinner-grow text-danger spinner-grow-sm" role="status" aria-hidden="true"></span>
            </a>
            <?php endif;?>

        </div>
    </div>
</div>

<style>
.number-items div div:hover {
    background: #098cf3c4 !important;

}
</style>

<div class="container">
    <div class="row row-cols-2 row-cols-lg-3 number-items g-3 text-center" style="cursor:pointer;">

        <div class="col">
            <div class="py-4 rounded lg-blue text-light border">
                <p class="fw-bold">Number of Customers</p>
                <p><i class="bi bi-people fs-4 py-2"></i></p>
                <p class="fst-italic fw-bold">Total (<?php echo $usersNum;?>)</p>
            </div>
        </div>

        <div class="col">
            <div class="py-4 rounded lg-velvet-sun border text-light">
                <p class="fw-bold">Appointments</p>
                <p><i class="bi bi-book fs-4 py-2"></i></p>
                <p class="fw-bold">Total (<?php echo $bookNum;?>) </p>
            </div>
        </div>


        <div class="col">
            <div class="py-4 rounded lg-purpink text-light border">
                <p class="fw-bold">Products in Stock</p>
                <p><i class="bi bi-cart fs-4 py-2"></i></p>
                <p class="fw-bold">Total (<?php echo $productsNum;?>) </p>
            </div>
        </div>

        <div class="col">
            <div class="py-4 rounded lg-subu text-light border">
                <p class="fst-italic fw-bold">Revenue</p>
                <p><i class="bi bi-currency-dollar fs-4 py-2"></i></p>
                <p class="fw-bold">
                    <?php
                     if(gettype($profits) == 'double')
                     {
                       echo 'MK'.number_format($profits, 2);
                     } else {
                       echo 'MK'.number_format($profits/2, 2);
                     }
                    ?>
                </p>
            </div>
        </div>

        <div class="col">
            <div class="py-4 rounded border lg-scooter text-light">
                <p class="fw-bold">Profits</p>
                <p><i class="bi bi-currency-dollar fs-4 py-2"></i></p>
                <p class="fst-italic fw-bold"><?php echo 'MK'.number_format($profits / 2, 2);?></p>
            </div>
        </div>

        <div class="col">
            <div class="py-4 rounded border lg-red text-light">
                <p class="fw-normal txt-poppins">Number of Sales</p>
                <p><i class="bi bi-currency-dollar fs-4 py-2"></i></p>
                <p class="fst-italic fw-bold">Total (<?php echo $salesNum;?>) </p>
            </div>
        </div>

    </div>
</div>
<br><br><br>
<style>
.item-A:hover {
    background: linear-gradient(to left, rgb(12, 235, 235), rgb(32, 227, 178), rgb(41, 255, 198)) !important;
}

.item-B:hover {
    background: linear-gradient(to right, rgb(102, 125, 182),
            rgb(0, 130, 200), rgb(0, 130, 200), rgb(102, 125, 182)) !important;
}
</style>
<div class="container mb-3 px-4" style="cursor:pointer;">
    <div class="row gx-5">

        <div class="col">
            <div class="p-2 border">
                <h5 class="fs-6 fst-italic">Number of Visitors</h5>
            </div>
            <div class="p-3 px-5 item-A text-light text-start lg-scooter rounded">
                <div class="d-flex justify-content-between">
                    <p class="fw-normal fs-3 txt-poppins">
                        Visitors
                    </p>
                    <p><i class="bi bi-people-fill fs-4 py-2"></i></p>
                </div>
                <p class="fst-italic fs-2 fw-bold">3,375</p>
            </div>
        </div>

        <div class="col">
            <a class="text-decoration-none text-dark" href="<?php echo URL;?>messages">
                <div class="p-2 border">
                    <h5 class="fs-6 fst-italic">Customers Queries</h5>
                </div>
                <div class="p-3 px-5 item-B text-light text-start lg-deep-purple rounded">
                    <div class="d-flex justify-content-between">
                        <p class="fw-normal fs-3 txt-poppins">
                            FAQ(s)
                        </p>
                        <p><i class="bi bi-chat-left-text fs-4 py-2"></i></p>
                    </div>
                    <p class="fst-italic fs-2 fw-bold">3,375</p>
                </div>
            </a>
        </div>

    </div>
</div>
</div>