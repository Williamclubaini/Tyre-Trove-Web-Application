<?php 

class AdminProducts extends Administration{

    public function data()
    {
        $this->data['products'] = $this->getProducts();
        $this->data['delete'] = $this->deleteProduct();
        return $this->data;
    }

    public function webpage()
    {
        $this->view('controllers/operators/session', $this->Model());
        $this->view('controllers/operators/logout', array('admin'));
        $this->view('views/templates/header-2');
        $this->view('views/templates/side-bar', $this->Model()->bookingsNum());
        $this->view('views/templates/main-tag');
        $this->view('views/admin/adminProducts', $this->data());
        $this->view('views/templates/footer-2');
    }

}
?>