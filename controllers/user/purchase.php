<?php 

class Purchase extends User{

    public function webpage()
    {
        $this->view('controllers/operators/user_session', $this->Model());
        $this->view('controllers/operators/logout', array('user'));
        $this->view('views/templates/header-2');
        $this->view('views/templates/side-bar');
        $this->view('views/templates/main-tag');
        $this->view('views/user/purchase', $this->viewPurchaseRecords());
        $this->view('views/templates/footer-2');
    }

}
?>