<!-- ! Main --> 
<?php 
if(!empty($_SESSION["cart"]))
{
$total=0;?>

<div class="pt-3 pb-2 border-bottom">
  <header>
    <h1 class="text-dark fs-3 fw-lighter"><i class="bi bi-cart3"></i> Shopping Cart</h1>
    <span class="fst-italic">Products in the cart.</span>
  </header>
</div>
<div class="row">
    <div>
      <div class="users-table table-wrapper">
        <table class="table table-hover table-stripped pointer">
          <thead class="table-primary">
            <tr>
              <th>Product</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Cost</th>
              <th>Remove</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach ($_SESSION["cart"] as $keys => $value) {?>
            <tr>
                <td>
                  <img height="35px" src="assets/images/products/<?php echo $value["image"];?>" alt="User Name">
                  <?php echo $value["product_name"];?>
                </td>
                <td class="table-info">
                  <?php echo 'MK'.number_format($value["price"], 2);?>
                </td>
                <td class="table-success">
                  <?php echo $value["quantity"];?>
                </td>
                <td class="table-warning">
                    <?php echo 'MK'.number_format($value["price"] * $value['quantity'], 2);?>
                </td>
                <td class="table-danger">
                  <a class="text-decoration-none text-center" href="<?php echo URL;?>cart&action=delete&id=<?php echo $value["id"];?>">
                    <i class="bi bi-trash"></i>
                  </a>
                </td>
            </tr>
            <?php 
              $total=$total + ($value["quantity"] * $value["price"]);
              @$items= $items + $value["quantity"]; }?>
          </tbody>
        </table>
        
          <form method="POST">

          <!-- HIDDEN -->
          <input type="hidden" name="totalItems" value="<?php echo $items;?>">
          <input type="hidden" name="totalAmount" value="<?php echo number_format($total, 2);?>">
          <!--= END HIDDEN =-->

          <div class="d-flex justify-content-start">
            <p> 
              <span class="fw-bold">Total Items</span>: <?php echo $items;?> <br>
              <span class="fw-bold">Total Amount </span>: MK<?php echo number_format($total, 2);?> <br>
            </p>
          </div>
          <button name="checkout" type="submit" class="btn w-25 btn-sm text-light hover-1 my-blue-theme">
                  <i class="bi bi-currency-dollar"></i>  Check Out
          </button>
          </form>
  
      </div>
    </div>
  </div>
  <?php } else{?>
    <div class="text-center bg-body border rounded w-75 mx-auto p-5" style="margin-top:20%;">
        <?php echo("<i class='bi bi-cart'></i> There are no items in your cart."); ?>
    </div>
  <?php }?>