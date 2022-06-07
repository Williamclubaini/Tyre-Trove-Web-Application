<?php 

class Covid extends website {

    public function webpage()
    {
        $this->view('views/templates/header-1');
        $this->view('views/templates/navbar');
        $this->view('views/pages/covid');
        $this->view('views/templates/footer-1');
    }

}
?>