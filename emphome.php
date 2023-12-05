<?php
session_start();
include("dbconnect.php");
extract($_POST);

if(isset($_POST['btn']))
{
$max_qry = mysql_query("select max(id) from material");
		$max_row = mysql_fetch_array($max_qry); 
		$id=$max_row['max(id)']+1;
$qry=mysql_query("insert into material values('$id','$name','$price','$qty','$img','$desc')");
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
      <th scope="col"><a href="emphome.php"><strong>Home Page</a></th>
      <th scope="col"><a href="mview.php"><strong>View Material</a></th>
	   <th scope="col"><a href="sales.php"><strong>View Sales</a></th>
      <th scope="col"><a href="index.php"><strong>LogOut</a></th>
    </tr>
  </table>
  
  
  <p>&nbsp;</p>
  <div id="content">
   <img src="images\1.jpg" width="1420" height="200">


 <br>
  <br>
  <br>
  <br>
<br>
		
		<form id="f1" name="f1" method="post" action="#" onSubmit="return vali()">
  <table width="37%" height="281" border="0" align="center">
	<tr>
	<td colspan="2 " align="center"><strong> Sports Product Entry</strong></td>
	</tr>
	<tr>
   <tr>
      <td width="39%">&nbsp;</td>
      <td width="61%">&nbsp;</td>
    </tr>
	 <tr>
       <td>Material Name</td>
      <td><label>
      		<input name="name" type="text" required >
		
      </label></td>
    </tr>
	
	<tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	 <tr>
      <td>Price </td>
      <td><label>
      		<input name="price" type="text" id="price" required>
      </label></td>
    </tr>
	 <tr>

    </tr>
	 <tr>
       <td>Quantiy</td>
      <td><label>
      		<input name="qty" type="text"  required>
      </label></td>
    </tr>
	
	 <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	 <tr>
      <td>Image</div></td>
      <td><label>
      		<input name="img" type="file" required></div>
      </label></td>
     
    </tr>
	 <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
    <tr>
      <td>Description</td>
      <td><label>
      		<input name="desc" type="text"  required>
      </label></td>
     
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