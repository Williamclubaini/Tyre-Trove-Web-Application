<?php 

class UserAccount extends User{

    private function data()
    {
        $this->data['appointments'] = $this->countRecords('appointments_tbl', 'user_id');
        $this->data['purchase']     =  $this->countRecords('purchase_records_tbl', 'user_id');
        return $this->data;
    }

    private function search()
    {
        if (isset($_POST['search'])) {
            $query = "SELECT * FROM `products_tbl` WHERE `name` LIKE '{$_POST['fetch']}%'";
            return $this->Model()->runQuery($query);
        }
    }

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
        $this->view('views/templates/main-header', $this->data()['appointments'], $this->search(), $this->addToCart());
        $this->view('views/templates/notifications', $this->data());
        $this->view('views/user/userAccount', $this->UserProfile());
        $this->view('views/templates/footer-2');
    }

}
?>