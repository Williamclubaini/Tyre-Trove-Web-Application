<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2">
    <h4>Spare Parts Management System For Tyre Trove</h4>
</div>
<?php 
if (isset($_SESSION['user'])) {?>
<div class="py-2">
    <div class="col-sm-12 mx-auto">
        <form class="row g-1" method="POST">
            <div class="col-md-8 col-lg-7">
                <input class="form-control" name="fetch" type="text" placeholder="Search for spare parts..."
                    aria-label="Search" required>
            </div>
            <div class="col-md-4 col-lg-5">
                <button class="btn btn-danger" type="submit" name="search">Search</button>
            </div>
        </form>
    </div>
</div>
<?php }
?>

<?php

if (!empty($mixed)) {
    if(count($mixed) > 0)
    {?>

<div class="container mx-auto p-2 text-start fw-bold">
    <span><?php echo count($mixed);?> <?php
    
    if (count($mixed) == 1) {
        echo 'Result found..';
    } elseif (count($mixed) > 1) {
        echo 'Results found..';
    }?></span>
</div>
<div class="row" style="height:100vh;">
    <?php 
    foreach($mixed as $product):?>
    <div class="mx-auto col-5 col-md-4 col-xl-3">
        <div class="img-card">
            <img src="assets/images/products/<?php echo $product->image;?>" class="card-img-top">
        </div>
        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $product->id;?>">

            <!-- HIDDEN -->
            <input type="hidden" name="image" value="<?php echo $product->image;?>">
            <input type="hidden" name="product" value="<?php echo $product->name;?>">
            <input type="hidden" name="price" value="<?php echo $product->price;?>">
            <input type="hidden" name="dbqty" value="<?php echo $product->quantity;?>">
            <!-- HIDDEN -->

            <p><?php echo $product->name;?><br>
                <span class="fw-bold"><?php echo 'MK'.number_format($product->price, 2);?></span>
                <?php 
              $qty = $product->quantity;
              if($qty > 1){?>
                <br>Quantity: <?php echo $product->quantity;?></br>
                <input class="form-control border border-dark mb-2" value="1" type="number" name="quantity" min="1"
                    max="<?php echo $qty;?>">
                <button type="submit" name="addToCart" class="btn w-100 my-blue-theme text-light hover-1">
                    <i class="bi bi-cart"></i> Add To Cart</button>
            </p>

            <?php } else {?>
            <br>Quantity: <?php echo $product->quantity;?></br>
            <input class="form-control border border-dark mb-2" value="<?php echo $product->quantity;?>" type="number"
                name="quantity" min="<?php echo $product->quantity;?>" max="<?php echo $qty;?>">
            <button type="submit" name="addToCart" class="btn w-100 lg-red" disabled>
                <span class="text-light">Out of Stock</span></button>
            </p>
            <?php }?>
        </form>
    </div>
    <?php endforeach;?>
</div>

<?php }  
} else {?>

<?php 

if (isset($mixed) && count($mixed) === 0) {?>
<div class="container mx-auto p-2 text-start fw-bold">
    <span>No results found..</span>
</div>

<?php }
?>
<?php }

?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h4 class="fw-normal fs-5"><i class="bi bi-person-circle"></i> Hi, <?php echo USER->firstname;?>,</h4>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <?php 
    
    if($data[0]->numbersOfRecords > 0)
    {?>
            <a href="<?php echo URL;?>appointments" type="button" class="btn btn-sm btn-outline-danger">Appointment(s)
                <span class="spinner-grow bg-danger spinner-grow-sm" role="status" aria-hidden="true"></span>
            </a>
            <?php } else {?>
            <a href="<?php echo URL;?>appointments" type="button" class="btn btn-sm btn-outline-danger">Appointment(0)
            </a>
            <?php }?>
        </div>
    </div>
</div>