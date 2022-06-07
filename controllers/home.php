<?php 

use Controllers\Forms\Contact;

class Home extends website {

    private function Contact()
    {
        return new Contact();
    }

    // landingpage
    public function webpage()
    {
        $this->view('controllers/operators/logout');
        $this->view('views/templates/header-1', 'assets/css/pagereload.css');
        $this->view('views/templates/modal');
        $this->view('views/templates/navbar');
        $this->view('views/templates/slider');
        $this->view('views/templates/about-us', $this->aboutUs());
        $this->view('views/templates/showcase', $this->showCase());
        $this->view('views/templates/services');
        $this->view('views/templates/brands');
        $this->view('views/templates/testimonials');
        $this->view('controllers/forms/contact');
        $this->view('views/templates/contact-us', $this->Contact());
        $this->view('views/templates/footer-1',  'assets/js/refresh().js');
    }

}