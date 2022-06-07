<?php 

class Payment extends User {

    public function webpage()
    {
        $this->view('controllers/operators/user_session', $this->Model());
        $this->view('views/templates/header-1');
        $this->view('views/user/payment');
    } 

}