<?php 

class Register extends website {
    
    public function register()
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
                $query  = $this->Model()->selectFromAndWhere('users_tbl', 'usertype');
                $DBDATA = $this->Model()->runQuery($query, [1]);
                $key    = array_search($this->data[3], array_column($DBDATA, 'email'));
                
                if(gettype($key) == 'boolean')
                {
                    array_push($this->data, $this->userType);
                    $columns = array('firstname', 'lastname', 
                                     'contact', 'email', 'location', 'password', 'usertype');
                    $query = $this->Model()->insertInto('users_tbl', $columns);
                    $this->Model()->execute($query, $this->data);
                    $data = $this->data;
                    $this->Model()->Redirect('userAccount', $data['3']);

                } else{

                    $error['error'] = '<b><em>'.$_POST['email'].'</em></b> Email is already in use.';
                    return $error;
                }

            } else {

                return $this->error;
            }
        }
    }
    
    public function webpage()
    {
        $this->view('views/templates/header-1');
        $this->view('views/pages/register', $this->register());
    }

}