<?php 

use Models\Model;
use Libraries\Validations;
use Controllers\Operators\PageController AS Controller;

class Website extends Controller {

    protected $data = [];
    protected $error = [];
    protected $userType = 1;

    use validations;

    protected function Model()
    {
        return new Model();
    }

    protected function questions()
    {
        return $this->model()->runQuery($this->Model()->selectAllFrom('faq_tbl'));
    }

    protected function getUsers()
    {
        $query  = $this->Model()->selectFromAndWhere('users_tbl', 'usertype');
        return $this->Model()->runQuery($query, [$this->userType]);
    }

    protected function attempts()
    {
        $query = $this->Model()->insertInto('loginattempts_tbl', array('attempt'));
        $this->Model()->execute($query, [1]);
        $sql = $this->Model()->selectAllFrom('loginattempts_tbl');
        return $this->Model()->runQuery($sql);
    }

    protected function deleteAttempts()
    {
        $query = $this->Model()->deleteAllFrom('loginattempts_tbl');
        $this->Model()->execute($query);
    }

    // getAboutUs information
    protected function aboutUs()
    {
        $query = $this->Model()->selectAllFrom('about_tbl');
        return $this->Model()->runQuery($query);
    }

    // getProducts
    protected function showCase()
    {
        $query = $this->Model()->selectFromAndLimit('products_tbl', 3);
        return $this->Model()->runQuery($query);
    }

    protected function getQuestion()
    {        
        if(isset($_POST['faq']))
        {
            
            $questions_array = $this->questions();
            $key = array_search($_POST['question'], array_column($this->questions(),'question'));
            $dbQuery = $questions_array[$key]->question;
            
            if($dbQuery == $_POST['question'])
            {
                $this->sweetAlert('', 'Your question is already in our question list below.', 'info');    
                
            } else
            {
                array_push($this->data, $_POST['question'], $_POST['answer']);
                $query = $this->Model()->insertInto('faq_tbl', array('question', 'answer'));
                $this->Model()->execute($query, $this->data);
                $this->sweetAlert('Thank You.', 'We have received your question.', 'success');
            }
        }   
    }
}
?>