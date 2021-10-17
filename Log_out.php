<?php
session_start();
if(isset($_SESSION['User_login']))
{
    unset($_SESSION['User_login']);

    //session_destroy();
    if(!isset($_SESSION['User_login']))
    {
        header("location:Login.php");
    }
}


?>
