<?php 

class FAQ extends Website {
    
    public function webpage()
    {
        $this->view('views/templates/header-1');
        $this->view('views/templates/navbar');
        $this->view('views/pages/faq', $this->questions(), $this->getQuestion());
        $this->view('views/templates/footer-1');
    }

}
?>