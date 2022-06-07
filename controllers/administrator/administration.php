<?php 

use Models\Model;
use Controllers\Operators\PageController As Controller;

Class Administration extends Controller{

    private $data = [];

    protected function Model()
    {
        return new Model();
    }

    // counting all records with a specific value or id
    protected function numberOfRecordsWhere(string $table, string $column, $value)
    {
        $query = $this->Model()->countAllWhere($table, $column);
        return $this->Model()->runQuery($query, [$value]);
    }
    
    // SUM `cost` column in purchasing records table
    protected function profits()
    {
        $query = $this->Model()->sumColumn('cost', 'purchase_records_tbl');
        return $this->Model()->runQuery($query);
    }

    // count all records in a table
    protected function numberOfRecords(string $table)
    {
        $query = $this->Model()->countAll($table);
        return $this->Model()->runQuery($query);
    }

    // getting 7 book records at the dashboard showing to admin
    protected function bookRecords()
    {
        $query = 'SELECT users_tbl.firstname, users_tbl.lastname,
                appointments_tbl.vehicle, appointments_tbl.visit_day,
                appointments_tbl.servicing, appointments_tbl.problem,
                appointments_tbl.status, appointments_tbl.date
                FROM appointments_tbl
                JOIN users_tbl
                ON appointments_tbl.user_id = users_tbl.id
                WHERE appointments_tbl.status = ? LIMIT 7';
        
        return $this->Model()->runQuery($query, ['pending']);
    }

    // APPOINTMENTS
    protected function bookings()
    {
        $query = 'SELECT appointments_tbl.id, users_tbl.firstname, users_tbl.lastname,
                appointments_tbl.vehicle, appointments_tbl.visit_day,
                appointments_tbl.servicing, appointments_tbl.problem,
                appointments_tbl.status, appointments_tbl.date
                FROM appointments_tbl
                JOIN users_tbl
                ON appointments_tbl.user_id = users_tbl.id
                WHERE appointments_tbl.status = ?';
        
        return $this->Model()->runQuery($query, ['Pending']);
    }

    // Disapproving or Approving Appointments
    protected function bookAction()
    {
        if(isset($_GET['id']) && isset($_GET['action']))
        {
            if($_GET['action'] == 'Approved')
            {
                $query = $this->Model()->update('appointments_tbl',['status'], 'id');
                $this->Model()->execute($query, ['Approved', $_GET['id']]);
                sleep(1);
                $this->windowLocation('index.php?page=adminAppointments');

            } elseif($_GET['action'] == 'Disapproved')
            {
                $query = $this->Model()->update('appointments_tbl',['status'], 'id');
                $this->Model()->execute($query, ['Disapproved', $_GET['id']]);
                sleep(1);
                $this->windowLocation('index.php?page=adminAppointments');
            }
        }
    }

    // display database products
    protected function getProducts()
    {
        $query = $this->Model()->selectAllFrom('products_tbl');
        return $this->Model()->runQuery($query);
    }

    // delete products
    protected function deleteProduct()
    {
        if(isset($_GET['action']) == 'Delete')
        {
            $query = $this->Model()->deleteFromWhere('products_tbl', 'id');
            $this->Model()->execute($query, [$_GET['id']]);
            sleep(1);
            $this->windowLocation('index.php?page=adminProducts');
        }
    }

    // Add new product
    protected function addProduct()
    {
        if(isset($_POST['add']))
        {
            array_push($this->data, $_POST['image'],
                                    $_POST['pname'],
                                    $_POST['price'],
                                    $_POST['quantity']);
            $columns = array('image', 'name', 'price', 'quantity');
            $query = $this->Model()->insertInto('products_tbl', $columns);
            $this->Model()->execute($query, $this->data);
            sleep(3);
            // $this->windowLocation('index.php?page=addProducts');
            $this->sweetAlert('!', 'A New Product is Successfully Added.', 'success');
        }
    }

    // View Users
    protected function getUsers()
    {
        $query = $this->Model()->selectFromAndWhere('users_tbl', 'usertype');
        return $this->Model()->runQuery($query, [1]);
    }

    // Sales Report
    protected function salesReport()
    {
        $query = 'SELECT users_tbl.firstname,
                  users_tbl.lastname,
                  purchase_records_tbl.product_name,
                  purchase_records_tbl.price,
                  purchase_records_tbl.quantity,
                  purchase_records_tbl.cost,
                  purchase_records_tbl.date
                  FROM purchase_records_tbl
                  JOIN users_tbl
                  ON purchase_records_tbl.user_id = users_tbl.id';
        
        return $this->Model()->runQuery($query);
    }

}

?>