<?php 

class Ship extends User{

    private function confirmShipping()
    {
        if(isset($_POST['confirm']))
        {
            // subtracting quantity from DB and user selected quantity = remaining products quantity
            sleep(3);
            $array = $_SESSION['cart'];
            $key = 0;
            for ($i=1; $i <= count($array) ; $i++) { 

                $productID = $array[$key]['id'];
                $newQty = $array[$key]['dbqty'] - $array[$key]['quantity'];
                $key++;
                $query = $this->Model()->update('products_tbl', array('quantity'), 'id');
                $this->Model()->execute($query, array($newQty, $productID));
            }
            // inserting data into shipping table
            $columns = array('customer_id', 'city', 'state', 'postal_code');
            $query = $this->Model()->insertInto('shipping_tbl', $columns);
            $this->Model()->execute($query, array(USERID, $_POST['city'], $_POST['state'], $_POST['postal_code']));
            unset($_SESSION['cart']);
            $this->redirectPage('shipping');
        }
    }

    public function webpage()
    {
        $this->view('controllers/operators/user_session', $this->Model());
        $this->view('controllers/operators/cart');
        $this->view('views/templates/header-1');
        $this->view('views/user/ship', $this->UserProfile(), $this->confirmShipping());
    }

}