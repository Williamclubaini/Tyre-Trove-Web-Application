<?php 

use Controllers\Operators\PageController AS Controller;

class Location extends Controller {

    public function webpage()
    {
        $this->view('views/templates/header-1');
        $this->view('views/templates/navbar');
        $this->view('views/templates/footer-1');
    }

}
?>