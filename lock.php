<?php
session_start();
if(!isset($_SESSION['User_login']))
{
    header('location:Login.php');
}
include('config.php');
$user_check=$_SESSION['User_login'];
$session_sql=mysqli_query($connect,"select * from member  where m_name='$user_check' ");
$row=mysqli_fetch_array($session_sql);
echo "Welcome</br>";
echo "</br>Name:".$login_session=$row['m_name'];
echo "</br>Email:".$login_session=$row['m_email'];
echo "</br>Address:".$login_session=$row['m_address'];
echo "</br>Contact_NO:".$login_session=$row['m_cont'];
echo "</br>Relation with me:".$login_session=$row['m_relation'];
?>
