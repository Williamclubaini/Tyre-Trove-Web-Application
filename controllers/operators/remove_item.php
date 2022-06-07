<?php 
if(isset($_GET["action"]))
{
    if($_GET["action"] == "delete")
    {
        foreach ($_SESSION["cart"] as $keys => $value) 
        {
            if($value["id"] == $_GET["id"])
            {
                unset($_SESSION["cart"][$keys]);
            }
        }
    }
}
?>