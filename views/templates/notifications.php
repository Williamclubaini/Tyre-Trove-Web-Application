<!-- ! Main -->

    <div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-2 g-2 row-cols-lg-3" style="cursor:pointer;">

        <div class="col">
            <a class="text-decoration-none" href="<?php echo URL;?>cart">
            <div class="text-center hover-1 lg-red text-light rounded py-5">
            <div class="badge my-blue-theme">
            <i class="bi bi-bag fs-5"></i>
            </div>
            <div>
                <p class="py-2">Shopping Cart <br> 
                    Total(<?php 
                            if(isset($_SESSION['cart']))
                            {
                                echo count($_SESSION['cart']);
                            } else {
                                echo 0;
                        }?>)
                </p>
            </div>
        </div>
            </a>
        </div>

        <div class="col">
        <a class="text-decoration-none" href="<?php echo URL;?>appointments">
        <div class="text-center hover-1 lg-scooter text-light rounded py-5">
            <div class="badge bg-warning">
            <i class="bi bi-folder fs-5"></i>
            </div>
            <div>
            <p class="py-2">Appointments <br>
                Total(<?php echo $data['appointments'][0]->numbersOfRecords;?>)
            </p>
            </div>
        </div>
        </a>
        </div>

       <div class="col">
       <a class="text-decoration-none" href="<?php echo URL;?>purchase">
        <div class="text-center hover-1 lg-purpink text-light rounded py-5">
            <div class="badge bg-success">
            <i class="bi bi-currency-dollar fs-5"></i>
            </div>
            <div>
            <p class="py-2">Purchase Records <br>
                Total(<?php echo $data['purchase'][0]->numbersOfRecords;?>)
            </p>
            </div>
        </div>
        </a>
        </div>

    </div>