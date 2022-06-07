<?php 

use Models\Model;
use Controllers\Operators\PageController As Controller;

class User extends Controller{

    private $data = [];
    private $title = 'Tyre Trove - Dashboard';

    protected function Model()
    {
        return new Model();
    }

    protected function countRecords(string $table, string $column)
    {
        $query = $this->Model()->countAllWhere($table, $column);
        return $this->Model()->runQuery($query, [USERID]);
    }

    protected function UserProfile()
    {
        $query = $this->Model()->selectFromWhereAnd('users_tbl', 'id', 'usertype');
        return $this->Model()->runQuery($query, [USERID, 1]);
    }

    protected function viewProducts()
    {
        $query = $this->Model()->selectAllFrom('products_tbl');
        return $this->Model()->runQuery($query);
    }

    protected function bookAppointment()
    {
        if(isset($_POST['book']))
        {
           array_push($this->data, USERID, $_POST['vehicle'], $_POST['visitday'],
                            $_POST['servicing'], $_POST['problem'], 'Pending');
            $columns = array('user_id', 'vehicle', 'visit_day', 'servicing', 'problem', 'status');
            $query = $this->Model()->insertInto('appointments_tbl', $columns);
            $this->Model()->execute($query, $this->data);
            sleep(2);
            $this->sweetAlert('!', 'You have successfully booked an appointment.', 'success');
        }
    }

    protected function viewAppointmentsRecords()
    {
        $query = 'SELECT users_tbl.firstname, users_tbl.lastname
                  ,appointments_tbl.vehicle, appointments_tbl.visit_day
                  ,appointments_tbl.servicing, appointments_tbl.problem
                  ,appointments_tbl.status, appointments_tbl.date
                  FROM appointments_tbl
                  JOIN users_tbl
                  ON appointments_tbl.user_id = users_tbl.id
                  WHERE appointments_tbl.user_id = ?';
        return $this->Model()->runQuery($query, [USERID]);
    }

    protected function viewPurchaseRecords()
    {
        $query = 'SELECT users_tbl.firstname, users_tbl.lastname
                  ,purchase_records_tbl.product_name, purchase_records_tbl.price
                  ,purchase_records_tbl.quantity, purchase_records_tbl.cost
                  ,purchase_records_tbl.date
                  FROM purchase_records_tbl
                  JOIN users_tbl
                  ON purchase_records_tbl.user_id = users_tbl.id
                  WHERE purchase_records_tbl.user_id = ?';
        return $this->Model()->runQuery($query, [USERID]);
    }

    protected function updateUser()
    {        
        if(isset($_POST['update']))
        {
            
            array_push($this->data, $_POST['firstname'], $_POST['lastname'], $_POST['contact'], 
            $_POST['location']);
            $columns = array('firstname', 'lastname', 'contact', 'location');
            $query = $this->Model()->update('users_tbl', $columns, 'id');
            array_push($this->data, USERID);
            $this->Model()->execute($query, $this->data);
            $this->sweetAlert('!', 'Profile successfully updated.', 'success');
            $this->windowLocation('index.php?page=settings');
        }
    }

}
?>