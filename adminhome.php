<?php
session_start();
include("dbconnect.php");
extract($_POST);

if(isset($_POST['btn']))
{
$max_qry = mysql_query("select max(id) from emp");
		$max_row = mysql_fetch_array($max_qry); 
		$id=$max_row['max(id)']+1;
$qry=mysql_query("insert into emp values('$id','$name','$gender','$age','$email','$phone','$quali','$address','$psw')");
if($qry)
{
echo"<script> alert('Entered suceessfully')</script>";
}
else
{
echo"<script> alert('Check Fields')</script>";
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
      <th scope="col"><a href="adminhome.php">Admin Home</a></th>
      <th scope="col"><a href="viewe.php">View Employees</a></th>
	   <th scope="col"><a href="viewm.php">View Materials</a></th>
      <th scope="col"><a href="viewu.php">View Users</a></th>
      <th scope="col"><a href="views.php">View Sales</a></th>
      <th scope="col"><a href="index.php">LogOut</a></th>
    </tr>
  </table>
  
  
  <p>&nbsp;</p>
  <div id="content">
   <img src="images\1.jpg" width="1420" height="200">


 <br>
  <br>
  <br>
  <br>

		<form id="f1" name="f1" method="post" action="#" onSubmit="return vali()">
  <table width="32%" height="286" border="0" align="center">
	<tr>
	<td colspan="2" align="center"><strong> Employee Entry</strong></td>
	</tr>
	<tr>
    <tr>
      <td width="41%">&nbsp;</td>
      <td width="59%">&nbsp;</td>
    </tr>
	 <tr>
      <td>Employee Name</td>
      <td>
      		<input name="name" type="text"  required pattern="[A-Za-z ]{3,32}">
      </td>
    </tr>	
	 <tr>
     <td>Gender</td>
      <td>
      		<input name="gender" type="radio" value="male" required> Male
			<input name="gender" type="radio" value="female"> Female
     </td>
    </tr>
	 <tr>
      <td>Age</td>
      <td>
      		<input name="age" type="text"  required>
     </td>
    </tr>
	
	 <tr>
     <td>Email</td>
      <td>
      		<input name="email" type="text"   required>
      </td>
      
    </tr>
	
	 <tr>
     <td>Phone</td>
      <td>
      		<input name="phone" type="text"   required size="10" pattern="[6789][0-9]{9}" >
     </td>
      
    </tr>
	
    <tr>
     
      <td>Qualification</td> 
      <td>
      		<input name="quali" type="text"   required>
		
      </td>
     
    </tr>
	
	 <tr>
      
      <td>Address</td>
      <td>
      		<input name="address" type="text"   required>
    </td>
     
    </tr>
	  <tr>
      <td>Password</div></td>
      <td>
      		<input name="psw" type="password"   required></div>
		
      </td>
      </tr>
	 <tr>
   
   
   	<td>&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
</table>
  
  </form>
  
  
  
    
<table width="100%" border="0">
    <tr>
      <th height="73" bgcolor="#4dffd2" scope="col"><p>copyrights@ Sports Material Shop</p>
      </th>
    </tr>
</table>


</body>
</html>
