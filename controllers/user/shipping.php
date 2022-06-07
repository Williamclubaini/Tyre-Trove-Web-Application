<?php 

class Shipping extends User {

    public function webpage()
    {
        $this->view('views/templates/header-1');
        $this->view('views/user/shipping');
    }

}