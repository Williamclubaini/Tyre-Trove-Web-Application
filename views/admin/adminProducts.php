<?php 
  if(!empty($data['products']))
  {?>
<div class="pt-3 pb-2 border-bottom">
  <h4 class="fw-normal"><i class="bi bi-cart2"></i> Product</h4>
  <span class="fst-italic">Products available in the stock</span>
</div>
  <div class="row">
    <div class="col-lg-12">
        <table class="table table-stripped table-hover" style="cursor:pointer;">
          <thead class="lg-scooter text-light">
            <tr>
              <th>Product Image</th>
              <th>Product Name</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
                foreach($data['products'] as $product):?>
            <tr>
              <td>
                <img height="30px" src="assets/images/products/<?php echo $product->image;?>" alt="item-picture">
              </td>

              <td>
                <?php echo $product->name;?>
              </td>

              <td>
                <?php echo 'MK'.number_format($product->price,2);?>
              </td>

              <td>
                <?php echo $product->quantity;?>
              </td>

              <td>  
              <a class="badge bg-danger text-decoration-none text-light p-2" href="<?php echo URL;?>adminProducts&id=<?php echo $product->id;?>&action=Delete">
                Delete
              </a> 
              </td>

            </tr>
                <?php endforeach; ?>
          </tbody>
        </table>
    </div>
  </div>
<?php } else {?>
  <div class="text-center bg-primary text-light border rounded w-75 mx-auto p-5" style="margin-top:20%;">
  <?php echo("There are no products available in the stock."); ?>
  </div>
<?php }?>