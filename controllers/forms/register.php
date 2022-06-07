<?php 
namespace Controllers\Forms;

use Models\Model;
use Controllers\Operators\PageController;
use Libraries\Validations;

class Register extends Model{

    use validations;

    public function Controller()
    {
        return new PageController();
    }

    public function issetRegister()
    {
        if(isset($_POST['register']))
        {
            $this->VALIDATE_STRING($_POST['firstname'], 'firstname');
            $this->VALIDATE_STRING($_POST['surname'], 'surname');
            $this->VALIDATE_CONTACT($_POST['contact']);
            $this->VALIDATE_EMAIL(htmlspecialchars($_POST['email']));
            $this->VALIDATE_STRING($_POST['location'], 'location');
            $this->VALIDATE_PASSWORD(htmlspecialchars($_POST['password']));

            if(count($this->data) == 6)
            {
                $query  = $this->selectFromAndWhere('users_tbl', 'usertype');
                $DBDATA = $this->runQuery($query, [1]);
                $key    = array_search($this->data[3], array_column($DBDATA, 'email'));
                
                if(gettype($key) == 'boolean')
                {
                    array_push($this->data, '1');
                    $columns = array('firstname', 'lastname', 
                                     'contact', 'email', 'location', 'password', 'usertype');
                    $query = $this->insertInto('users_tbl', $columns);
                    $this->execute($query, $this->data);
                    $data = $this->data;
                    $this->Redirect('userAccount', $data['3']);

                } else{

                    $this->Controller()->sweetAlert("Email is already in use.",
                    "Failed to register, please use your email address.", "error");
                }

            } else {

                $this->Controller()->sweetAlert("Invalid field(s)", "Furnish with data as we require in the form.", "error");
            }
        }
    }

}