<?php

if(isset($_GET['logout']))
{
	if($data[0] == 'user') 
	{
		sleep(2);
		unset($_SESSION['user']);
		unset($_SESSION['cart']);
		unset($_SESSION['admin']);
		header("location:index.php?page=home");
		
	} elseif($data[0] == 'admin')
	{
		sleep(2);
		unset($_SESSION['admin']);
		header("location:index.php?page=adminLogin");
	} else {
		
		sleep(2);
		unset($_SESSION['user']);
		unset($_SESSION['cart']);
		unset($_SESSION['admin']);
		header("location:index.php?page=home");
	}
}

?>