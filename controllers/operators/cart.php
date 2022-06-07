<?php

if (isset($_POST["addToCart"])) {

if(isset($_SESSION['cart'])){
$item_array_id=array_column($_SESSION["cart"], "id");
if(!in_array($_POST["id"], $item_array_id))
{
$count=count($_SESSION['cart']);
  $item_array=array(

    'id'    => $_POST['id'],
    'image' => $_POST['image'],
    'product_name'  => $_POST['product'],
    'price'    => $_POST['price'],
    'quantity' => $_POST['quantity'],
    'dbqty' => $_POST['dbqty']

  );
   $_SESSION['cart'][$count]=$item_array;
}
else{
  echo "<script>alert('Item is already added');</script>";
  /*echo '<script>window.location="./products.php"</script>';*/
}
 
}

else{
  $item_array=array(

    'id'    => $_POST['id'],
    'image' => $_POST['image'],
    'product_name'  => $_POST['product'],
    'price'    => $_POST['price'],
    'quantity' => $_POST['quantity'],
    'dbqty' => $_POST['dbqty']

  );
  //storing details above into $_SESSION['cart']
  $_SESSION['cart'][0]=$item_array;
}
//@array_push($_SESSION['cart']);
  
}
?>