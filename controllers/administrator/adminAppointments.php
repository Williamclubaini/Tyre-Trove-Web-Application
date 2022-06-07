<?php 

class AdminAppointments extends Administration{

    private function data()
    {
        $this->data['bookings'] = $this->bookings();
        $this->data['id'] = $this->bookAction();
        return $this->data;
    }

    public function webpage()
    {
        $this->view('controllers/operators/session', $this->Model());
        $this->view('controllers/operators/logout', array('admin'));
        $this->view('views/templates/header-2');
        $this->view('views/templates/side-bar', $this->Model()->bookingsNum());
        $this->view('views/templates/main-tag');
        $this->view('views/admin/adminAppointments', $this->data());
        $this->view('views/templates/footer-2');
    }

}
?>