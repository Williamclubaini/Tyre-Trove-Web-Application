<?php 

class Login extends website{

    // private $userType = 1;
    
    private function login()
    {
        if(isset($_POST['login']))
        {
            session_start();
            $this->VALIDATE_EMAIL(htmlspecialchars($_POST['email']));
            $this->VALIDATE_PASSWORD(htmlspecialchars($_POST['password']));

            if(count($this->data) == 2) {
                
                $email    = $this->data[0];
                $password = $this->data[1];
                $DBDATA   = $this->getUsers();
                $key      = array_search($email, array_column($DBDATA, 'email'));
                
                if(gettype($key) == 'boolean')
                {
                    
                    $data = $this->attempts();
                    
                    if(count($data) == 3)
                    {
                        $this->deleteAttempts();
                        $error['color'] = 'bg-info';
                        $error['msg'] = '
                                    <div class="py-5">
                                        <i class="bi bi-exclamation-triangle"></i>
                                        Too Many Login Attempts! wait for 10 minutes.
                                        <div class="d-flex mt-2 justify-content-center">
                                            <div class="spinner-border text-warning" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                        </div>
                                    </div>';
                        $error['email'] = $email;
                        $error['lock'] = 'disabled';
                        
                        return $error;

                    } else {
                     
                        $error['msg'] = 'Email does not exist';
                        $error['email'] = $email;
                        return $error;
                    }
                    
                } else {

                    $dbEmail  = $DBDATA[$key]->email;
                    $dbPassword = $DBDATA[$key]->password;

                    if($email == $dbEmail && $password == $dbPassword)
                    {
                        sleep(2);
                        $this->deleteAttempts();
                        $this->Model()->Redirect('userAccount', $email);

                    } else {
                        
                        $data = $this->attempts();
                        
                        if(count($data) == 3)
                        {
                            $error['color'] = 'bg-info';
                            $error['msg'] = '
                                    <div class="py-5">
                                        <i class="bi bi-exclamation-triangle"></i>
                                        Too Many Login Attempts! wait for 10 minutes.
                                        <div class="d-flex mt-2 justify-content-center">
                                            <div class="spinner-border text-warning" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                        </div>
                                    </div>';
                            $error['email'] = $email;
                            $error['lock'] = 'disabled';
                            $this->deleteAttempts();
                            return $error;

                        } else {
                        
                            $error['msg'] = 'Wrong password';
                            $error['email'] = $email;
                            return $error;
                        }
                        
                    }

                   
                }

            } else {

                $error['email'] = $_POST['email'];
                $error['password'] = $this->error['password'];
                return $error;
            }
        }
    }



    public function webpage()
    {
            $this->view('views/templates/header-1');
            $this->view('views/pages/login', $this->login());
    }
}