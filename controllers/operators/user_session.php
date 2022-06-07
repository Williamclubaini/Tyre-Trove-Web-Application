<?php 

session_start();

if (!isset($_SESSION['user'])) {	
	header("location:index.php");

} else {
    $email = $_SESSION['user'];
    $query = $data->selectFromWhereAnd('users_tbl', 'email', 'usertype');
    $info  = $data->runQuery($query, array($email, 1));
    define('USER', $info[0]);
    define('USERNAME', $info[0]->firstname.' '.$info[0]->lastname);
    define('USERID', $info[0]->id);
}
?>