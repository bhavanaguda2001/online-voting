<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Home page</title>
    </head>
    <body background="family.jpeg">
        <?php
        include"lock.php";
        ?> </br></br></br>
    <h1>Welcome To Home Page</h1>
    <button><a href="Log_out.php">Logout</a></button>

    </body>
    </html>

<!DOCTYPE html>
<html>
<head>
    <style>
        table 
        {
            border-style: solid;
            border-width: 2px;
            border-color: orangered;
        }
    </style>
</head>
    <center>
        <body background="family.jpeg">
        <form action="" method="POST">
        <h3>Serach to here</h3>
        <input type="text" name="serachname"></br></br></br>
        <input type="submit" name="serach">        

        </form>
    </body>

    </center>
    

    </html>



<?php
require_once("config.php");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$serach=$_POST["serachname"];
$query=mysqli_query($connect,"SELECT * FROM  member WHERE m_name LIKE '%$serach%' OR m_cont LIKE '%$serach%' ");
echo "<table border='1'>
<tr>
<th>Id</th>
<th>Name</th>
<th>Mobile</th>
<th>Email</th>
<th>Relation</th>
</tr>";
while($row=mysqli_fetch_array($query)){
echo "<tr>";

echo  "<td>". $row['m_id']."</td>";

echo  "<td>". $row['m_name']."</td>";

echo  "<td>". $row['m_cont']."</td>";

echo  "<td>". $row['m_email']."</td>";

echo  "<td>". $row['m_relation']."</td>";


echo  "</tr>";
}
}


?>
