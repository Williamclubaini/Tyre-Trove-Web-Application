<?php 
namespace Controllers\Forms;

use Models\Model;
use Libraries\Validations;

class Contact extends Model{

    use validations;

    public function Controller()
    {
        return new \Controllers\Operators\PageController();
    }

    public function issetContact()
    {
        // if contact us button is clicked
        if(isset($_POST['contact']))
        {
            // validating form fields
            $this->VALIDATE_STRING(htmlspecialchars($_POST['name']), 'fullname');
            $this->VALIDATE_EMAIL(htmlspecialchars($_POST['email']));
            $this->VALIDATE_STRING(htmlspecialchars($_POST['subject']), 'subject');
            $this->VALIDATE_STRING(htmlspecialchars($_POST['message']), 'message');

            // counting if data array contains all four fields data passed
            if(count($this->data) == 4)
            {
                //database column names in the table => contact_us_tbl
                $columns = array('fullname', 'email', 'subject', 'message');
                //passing table name and columns in the insertInto query
                $query = $this->insertInto('contact_us_tbl', $columns);
                // running the Query with data passed
                $this->runQuery($query, $this->data);
                //notification Successfully sent
                $this->Controller()->sweetAlert("Successfully sent","Thank you for contacting us.", "success");

            } else{
                // returning errors to the form
                return $this->error;
            }
        }      
    }
}

?>