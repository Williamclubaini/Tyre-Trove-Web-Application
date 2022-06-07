<?php 

session_start();

if (!isset($_SESSION['admin'])) {	
	header("location:index.php");

} else {
    $email = $_SESSION['admin'];
    $query = $data->selectFromWhereAnd('users_tbl', 'email', 'usertype');
    $info  = $data->runQuery($query, array($email, 0));
    define('USER', $info[0]);
    define('USERNAME', $info[0]->firstname.' '.$info[0]->lastname);
}
?>