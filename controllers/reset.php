<?php 

class Reset extends Website {

    private $feedBack = [];
    
    private function reset()
    {
        if(isset($_POST['reset']))
        {
            $this->VALIDATE_EMAIL(htmlspecialchars($_POST['email']));
            $this->VALIDATE_PASSWORD(htmlspecialchars($_POST['password']));

            if(count($this->data) == 2) {

                $dataDB = $this->getUsers();
                $key = array_search($this->data[0], array_column($dataDB, 'email'));

                if(gettype($key) == 'boolean')
                {
                    $this->feedBack['color'] = 'bg-danger';
                    $this->feedBack['email'] = $_POST['email'];
                    $this->feedBack['msg'] = 'Email does not exist';
                    return $this->feedBack;
                } 
                else 
                {    
                    $query = $this->Model()->update('users_tbl', array('password'), 'usertype');
                    $this->Model()->execute($query, array($this->data[1], $this->userType));
                    $this->feedBack['color'] = 'bg-success';
                    $this->feedBack['msg'] = 'Password successfully updated!';
                    return $this->feedBack;   
                }
            } else {
                
                $this->feedBack['email'] = $_POST['email'];
                $this->feedBack['password'] = $this->error['password'];
                return $this->feedBack;
            }
        }
    }

    public function webpage()
    {
        $this->view('views/templates/header-1');
        $this->view('views/pages/reset', $this->reset());
    }
}