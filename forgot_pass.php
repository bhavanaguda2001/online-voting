<?php
include("config.php");
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $name=$_POST['m_name'];
    $pass=md5($_POST['m_pass']);
    $query=mysqli_query($connect,"UPDATE family.member SET m_pass='$pass' WHERE member.m_name='$name' ");
     if($query==true){
         echo "password  Updated";
         header("location:Login.php");
     }
     else{
         echo "not".mysqli_error();
     }
}


?>

<!DOCTYPE html>
<html>
    <head>
        <body background="family.jpeg">
            <center>
            <form id="update" action="" method="POST">
            <h2>forgot_password Form </h2>
            <p>Enter Your Detailas below</p>
            <input type="text" name="m_name" id="m_name" value="" placeholder="Enter Username"></br></br>
            <input type="password" name="m_pass" id="m_pass" value="" placeholder="update Password"></br></br>
            <button type="submit">Submit</button>
            </form>
            </center>
        </body>
    </head>
</html>