<?php 

class Dashboard extends User{

    public function webpage()
    {
        $this->view('controllers/operators/user_session', $this->Model());
        $this->view('views/templates/header-2');
        $this->view('views/templates/side-bar');
        $this->view('views/templates/main-header');
        $this->view('views/user/dashboard');
        $this->view('views/templates/footer-2');
    }
}
?>