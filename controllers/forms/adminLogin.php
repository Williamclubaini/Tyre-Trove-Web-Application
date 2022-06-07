<?php 
namespace Controllers\Forms;

use Models\Model;
use Libraries\Validations;
use Controllers\Operators\PageController;

class AdminLogin extends Model{

    use validations;

    private function Controller()
    {
        return new PageController();
    }

    public function Login()
    {
        if(isset($_POST['Login']))
        {
            $this->VALIDATE_EMAIL(htmlspecialchars($_POST['email']));
            $this->VALIDATE_PASSWORD(htmlspecialchars($_POST['password']));

            if(count($this->data) == 2)
            {
                $email    = $this->data[0];
                $password = $this->data[1];
                $query    = $this->selectFromAndWhere('users_tbl', 'usertype');
                $DBData   = $this->runQuery($query, [0]);
                $key      = array_search($email, array_column($DBData , 'email'));

                if(gettype($key) == 'boolean')
                {
                    $this->Controller()->sweetAlert("Failed to login.", "Wrong email address, please try again.", "error");
                } else {
                    
                    $emailDB    = $DBData[$key]->email;
                    $passwordDB = $DBData[$key]->password;

                    if($emailDB == $email && $passwordDB == $password)
                    {
                        $this->adminRedirect('adminAccount', $email);
                        
                    } elseif($emailDB == $email && $passwordDB !== $password)
                    {
                        $this->Controller()->sweetAlert("Incorrect password", 
                                                        "Please Try Again.", 
                                                        "error");
                    }
                }

            } else {

                return $this->error;
            }
        }
    }

}