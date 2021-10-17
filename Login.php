<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Welcome to Login page</title>
</head>
<body background="family.jpeg">

<center>
	    <form action="" method="POST" >
</br></br></br>
    <h4>Login with username and Password</h4>
    <input type="text" id="m_name" name="m_name" value="" placeholder="Enter Username"></br></br>
    <input type="password" id="m_pass" name="m_pass" value="" placeholder="Enter Password"></br></br>
    <input type="submit" value="Log_In"></br></br>
   
    <a href="forgot_pass.php">forgot password</a></br></br>
     
    </form>
    For New User Registration Here
    <a class="" href="Registration_form.php">Registar</a>

</center>

</body>
</html>
<?php
//Login with Username and password
session_start();
include("config.php");
if(isset($_SESSION['User_login']))//here set the session for User_Login
{
    header("location:Home.php");
}
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $myusername=$_POST['m_name'];
    $mypassword=$_POST['m_pass'];
    $password=md5($mypassword);//Encrypted password when you compare the password with original pass is converted into encryted form so we can only use the encrypted form 
    $sql_query= "SELECT m_id FROM member WHERE m_name='$myusername' and m_pass='$password' ";
    $result=mysqli_query($connect,$sql_query);
    $row=mysqli_fetch_array($result);
    $count=mysqli_num_rows($result);
    if($count==1)
    {
        $_SESSION['User_login']=$myusername;
        header("location:Home.php");
    
    }
    else{
        echo "Your Login Name or Password is invalid" ;
    }
}

?>
