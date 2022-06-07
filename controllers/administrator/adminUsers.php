<?php 


class AdminUsers extends Administration{
    
    public function webpage()
    {
        $this->view('controllers/operators/session', $this->Model());
        $this->view('controllers/operators/logout', array('admin'));
        $this->view('views/templates/header-2');
        $this->view('views/templates/side-bar', $this->Model()->bookingsNum());
        $this->view('views/templates/main-tag');
        $this->view('views/admin/adminUsers', $this->getUsers());
        $this->view('views/templates/footer-2');
    }

}

?>