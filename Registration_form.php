<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Welcome to Registration Form </title>
</head>
<body  background="family.jpeg" ">
	<center>
		
		<form
			

    id="regi" action="insert.php" method="POST">
    <h1 style="color:black;">Family  Registration Form</h1>
    <p><i>Enter your details below</i></p>
   <div style="color:black;"> 
    
   Full name:<input type="text" name="m_name" id="m_name"
    value="" placeholder="Enter The Name"></br></br>


    Email:<input type="text" name="m_email" id="m_email"
    value="" placeholder="Eg:abc@gmail.com"> </br></br>
     
    DOB:<input type="date" name="m_DOB" id="m_DOB"
    value="" ></br></br> 
 
    Gender:<input type="radio" name="m_gender" id="m_gender" value="Male"> Male
    <input type="radio" name="m_gender" id="m_gender" value="Female"> Female </br></br>
   
    
    Relation:<input type="text" name="m_relation" id="m_relation"
    value="" placeholder="with Me"> </br></br>

    designation:<input type="text" name="m_designation" id="m_designation"
    value="" placeholder="Enter your designation"> </br></br>
    
   <!--Blood_Group:<input type="text" name="m_bloodgroup" id="m_bloodgroup"
    value="" placeholder="Enter your Blood_Group"> </br></br>-->
    
    

    Address:<input type="text" name="m_address" id="m_address"
    value="" placeholder="Enter your address"> </br></br>

    Contact:<input type="text" name="m_cont" id="m_cont"
    value="" placeholder="Enter the cont_no"> </br></br>
   

    Password:<input type="password" name="m_pass" id="m_pass"
    value="" placeholder=""> </br></br>

    <input type="reset" name="reset" value="reset"></br>
    <button type="submit"> Submit </button> Already Registrated.
    <button><a href="Login.php">Login</a></button></br></br>
</div>
   </center>
		</form>
	</center>
</body>
</html>