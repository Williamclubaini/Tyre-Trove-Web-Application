<?php 

use Models\Model;
use Controllers\Forms\AdminLogin As SignIn;
use Controllers\Operators\PageController As Controller;

class AdminLogin extends Controller{
    
    private function Login()
    {
        return new SignIn();
    }

    public function webpage()
    {
        $this->view('controllers/forms/adminLogin');
        $this->view('views/templates/header-2');
        $this->view('views/admin/adminLogin', $this->Login());
        $this->view('views/templates/footer-2');
    }

}
?>