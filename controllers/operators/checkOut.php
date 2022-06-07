<?php 
if(isset($_POST['checkout']))
{
    $_SESSION['total'] = [];
    array_push($_SESSION['total'], $_POST['totalItems'], $_POST['totalAmount']);
    sleep(2);
    header("location:index.php?page=checkOut");
}
?>