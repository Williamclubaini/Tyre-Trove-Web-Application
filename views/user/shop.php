<?php 
if(!empty($data))
{?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <header>
        <h4 class="fw-normal">
            <i class="bi bi-cart3"></i> Products
        </h4>
        <small style="font-style: oblique;">purchase spare parts and brand new motorcycle.</small>
    </header>
</div>

<div class="row" style="height:100vh;">
    <?php 
    foreach($data as $product):?>
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
<?php } else {?>
<div class="text-center bg-body border rounded w-75 mx-auto p-5" style="margin-top:20%;">
    <?php echo("There are no products available in stock. <em>Please visit us later</em>."); ?>
</div>
<?php } ?>
</div>