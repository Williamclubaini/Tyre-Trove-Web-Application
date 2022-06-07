<?php 

class AdminAccount extends Administration{

    private function data()
    {
        $this->data['usersNum'] = $this->numberOfRecordsWhere('users_tbl', 'usertype', 1);
        $this->data['numAppointments'] = $this->numberOfRecordsWhere('appointments_tbl', 'status', 'Pending');
        $this->data['productsNumber']  = $this->numberOfRecords('products_tbl');
        $this->data['profits']         = $this->profits();
        $this->data['salesNumber']     = $this->numberOfRecords('purchase_records_tbl');
        $this->data['bookRecords']     = $this->bookRecords();
        return $this->data;
    }

    public function webpage()
    {
        $this->view('controllers/operators/session', $this->Model());
        $this->view('controllers/operators/logout', array('admin'));
        $this->view('views/templates/header-2');
        $this->view('views/templates/side-bar', $this->Model()->bookingsNum());
        $this->view('views/templates/main-tag');
        $this->view('views/admin/adminAccount', $this->data());
        $this->view('views/templates/footer-2');
    }

}
?>