<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
if(isset($_POST['btn']))
{


$qry=mysql_query("insert into register values('','$name','$gender','$age','$email','$phone','$loc','$address','$uname','$psw')");
	if($qry)
	{
	
	echo "<script>alert('inserted sucessfully')</script>";
	
	}
	else
	{
	
	
		echo "failed";
	
}

}

?>


<!DOCTYPE HTML>
<html>
<head>
  <title>Sports Shop</title>
  <meta name="description" content="website description" />
  <style type="text/css">
<!--
.style1 {color: #FF0000}
-->
  </style>
</head>
<body>
  <table width="100%" border="0">
    <tr>
      <th height="73" bgcolor="#4dffd2" scope="col"><h1>SPORTS MATERIAL SHOPPING</h1>
      </th>
    </tr>
  </table>
  <table width="100%" border="0">
   <tr>
      <th scope="col"><a href="index.php">Home</a></th>
      <th scope="col"><a href="admin.php">Admin Login</a></th>
      <th scope="col"><a href="emp.php">Employee Login</a></th>
      <th scope="col"><a href="user.php">User Login</a></th>
      <th scope="col"><a href="#">About Us </a></th>
    </tr>
  </table>
  
  
  <p>&nbsp;</p>
  <div id="content">
   <img src="images\1.jpg" width="1420" height="200">



	<br>
  <br>
  <br>
  <br>

	 <form id="f1" name="f1" method="post" action="#">
  <table width="35%" border="0" align="center">
    <tr>
          <td colspan="2"  align="center" ><div class="style5"><h3>New User Registration</h></div></td>
    
    </tr>	
    <tr>
      <td width="30%">Name</td>
      <td width="70%"><input name="name" type="text" id="name" required pattern="[A-Za-z ]{3,32}"/>
      </td>
      
    </tr>
    <tr>
     
      <td>Gender</td>
      <td><input name="gender" type="radio" value="male" required/>
        Male
          <input name="gender" type="radio" value="female" /> 
          Female</td>
    </tr>
    <tr>
      <td>Age</td>
      <td>
        <input name="age" type="text" id="age" required  pattern="[0-9]{2}"/>
      </td>
    </tr>
    <tr>
      <td>Email Id</td>
      <td><input name="email" type="email" id="email"  required/></td>
    </tr>
		  <tr>
      <td>Phone Number </span></td>
      <td><input name="phone" type="text" id="phone" required size="10" pattern="[6789][0-9]{9}" /></td>
    </tr>
	   <tr>
      <td>Address</td>
      <td><textarea name="address" id="address" required></textarea></td>
       </tr>
	<tr>
      <td>Zipcode</td>
      <td><input type="text" name="zip" id="zip"required></td>
    </tr>
    <tr>
      <td>User Name</td>
      <td><input name="uname" type="text" id="uname"required /></td>
    </tr>
    <tr>
     <td>Password</td>
      <td><input name="psw" type="password" id="psw" required/></td>
    </tr>
	<tr>
      <td>&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
</form>




	<br>
  <br>
  <br>
  <br>


<table width="100%" border="0">
    <tr>
      <th height="73" bgcolor="#4dffd2" scope="col"><p>copyrights@ Sports Material Shop</p>
      </th>
    </tr>
</table>


</body>
</html>