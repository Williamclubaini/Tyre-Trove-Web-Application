<!-- Shop -->
<section id="shop" class="theme-light p-lg-5">
    <div class="container this-shop">
        <?php 
      if(!empty($data))
      {?>
        <header class="text-center black-text">
            <h1><span class="blue text-light p-2">TyreTrove</span><span class="red text-light p-1">OnlineShop</span>
            </h1>
            <p class="col-lg-8 pt-3 mx-auto">We also sell a range of spare parts and sell different kinds of
                motorcycles. Here are some of parts that are available in our stock.</p>
        </header>

        <div class="col-12 col-md-10 col-lg-10 mx-auto">
            <div class="row row-cols-2 row-cols-md-2 row-cols-lg-3 gy-4 g-lg-4">

                <?php foreach($data as $item) {?>
                <div class="col">
                    <div class="item-card black-text">
                        <div class="img-card">
                            <img src="assets/images/products/<?php echo $item->image;?>" class="card-img-top">
                        </div>
                        <div class="item-body">
                            <h7 class="item-title"><?php echo $item->name;?></h7>
                            <h6><?php echo 'MK'.number_format($item->price, 2);?></h6>
                            <p>Quantity: <?php echo $item->quantity;?></p>
                        </div>
                        <a data-bs-toggle="modal" data-bs-target="#modal" class="btn w-100 blue-btn">
                            <i class="bi bi-cart"></i> Add To Cart
                        </a>
                    </div>
                </div>
                <?php }?>
            </div>
            <div class="text-center p-5">
                <a data-bs-toggle="modal" data-bs-target="#modal" class="btn blue-btn rounded-pill">
                    View more
                </a>
            </div>
        </div>
        <?php } else {?>
        <header class="text-center black-text">
            <h1><span class="blue text-light p-2">TyreTrove</span><span class="red text-light p-1">OnlineShop</span>
            </h1>
            <p class="col-lg-8 pt-3 mx-auto"> <em>There are no products available in our stock, please leave your email
                    in the contact us to get notified</em>.</p>
        </header>
        <?php }
    ?>
    </div>
</section>