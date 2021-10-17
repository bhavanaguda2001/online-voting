<?php
require_once("config.php");
if($_SERVER['REQUEST_METHOD']=='POST')
{

    $name=$_POST['m_name'];
    $email=$_POST['m_email'];
    $DOB=$_POST['m_DOB'];
    $gender=$_POST['m_gender'];
    $relation=$_POST['m_relation'];
    $designation=$_POST['m_designation'];
   // $blood=$_POST['m_bloodgroup'];   
    $address=$_POST['m_address'];
    $cont=$_POST['m_cont'];
    $pass=md5($_POST['m_pass']);

    $query=mysqli_query($connect,"INSERT INTO member (m_name,m_email,m_DOB,m_gender,m_relation,m_designation,m_address,m_cont,m_pass)
    VALUES('$name','$email','$DOB','$gender','$relation','$designation','$address','$cont','$pass')");

   if($query==true)
    {
        //echo "<center>"."inserted"."</center>";
        header("location:Login.php");
        
    }else
    {
        echo "Request method is not POST";
    }
}

?>