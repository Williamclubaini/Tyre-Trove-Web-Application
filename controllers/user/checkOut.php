<?php 

class CheckOut extends User{

    private function proceedPayment()
    {
        if(isset($_POST['proceed']))
        {
            $data = $_SESSION['cart'];
            $query = 'INSERT INTO purchase_records_tbl
             (`user_id`, `product_name`, `price`, `quantity`, `cost`, 
              `payment_method`, `credit_card_name`, `expiry_date`, `cardNumber`)
             VALUES(:user, :product_name, :price, :quantity, :cost, :paymentMethod, :ccname, :expdate, :cardNumber)';
             $sql = $this->Model()->Con()->prepare($query);
            
            foreach($data as $items)
            {
                unset($items['id']);
                unset($items['image']);
                unset($items['dbqty']);
                $cost = $items['price'] * $items['quantity'];
                $items['user'] = USERID;
                $items['cost'] = $cost;
                $items['paymentMethod'] = $_POST['paymentMethod'];
                $items['ccname'] = $_POST['ccname'];
                $items['expdate'] = $_POST['expdate'];
                $items['cardNumber'] = md5($_POST['cnum']);
                $sql->execute($items);
            }
            sleep(3);
            $this->redirectPage('payment');

        }
    }
    
    private function calculations()
    {
        $items = array_values($_SESSION['cart']);;
        $numberOfItems = count($items);

        $key = 0;
        $_SESSION['cost'] = [];

        for ($i=1; $i <= $numberOfItems; $i++)
        { 
            $cost = $items[$key]['price'] * $items[$key]['quantity'];
            array_push($_SESSION['cost'], $cost);
            $key++;
        }
        
        return $_SESSION['cost'];
    }

    public function webpage()
    {
        $this->view('controllers/operators/user_session', $this->Model());
        $this->view('controllers/operators/logout', array('user'));
        $this->view('controllers/operators/remove_item');
        $this->view('views/templates/header-1');
        $this->view('views/user/checkOut', $this->calculations(), $this->proceedPayment());
    }

}
?>