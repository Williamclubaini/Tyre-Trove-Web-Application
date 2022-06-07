<?php 

class Shop extends User{

    private function addToCart()
    {
        if (isset($_POST["addToCart"]))
        {
            if(isset($_SESSION['cart']))
            {
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
                    $this->sweetAlert("","Item is added to cart successfully.", "success");
                    // header("location:index.php?page=shop");
                }
                else
                {
                   $this->sweetAlert("","This Item is already added in your cart.", "warning");
                }
             
            }
            
            else
            {
                $item_array= array( 
                    'id'    => $_POST['id'],
                    'image' => $_POST['image'],
                    'product_name' => $_POST['product'],
                    'price'    => $_POST['price'],
                    'quantity' => $_POST['quantity'],
                    'dbqty'    => $_POST['dbqty']
                );

                $_SESSION['cart'][0]=$item_array;
            }
              
        }
    }
    public function webpage()
    {
        $this->view('controllers/operators/user_session', $this->Model());
        $this->view('controllers/operators/logout', array('user'));
        $this->view('views/templates/header-2');
        $this->view('views/templates/side-bar');
        $this->view('views/templates/main-tag');
        $this->view('views/user/shop', $this->viewProducts(), $this->addToCart());
        $this->view('views/templates/footer-2');
    }

}
?>