<?php 

class Cart extends User{


    public function webpage()
    {
        $this->view('controllers/operators/user_session', $this->Model());
        $this->view('controllers/operators/logout', array('user'));
        $this->view('controllers/operators/remove_item');
        $this->view('controllers/operators/checkOut');
        $this->view('views/templates/header-2');
        $this->view('views/templates/side-bar');
        $this->view('views/templates/main-tag');
        $this->view('views/user/cart');
        $this->view('views/templates/footer-2');
    }
}
?>