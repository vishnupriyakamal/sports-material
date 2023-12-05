<?php
session_start();
include("dbconnect.php");
extract($_POST);
$uid=$_SESSION['id'];
$mid=$_REQUEST['id'];
$price=$_REQUEST['price'];

if(isset($_POST['btn']))
{


$qry=mysql_query("insert into paid values ('$uid','$mid','$price','1')");
if($qry)
{

echo "<script>alert('paid sucessfully')";
header("location:userhome.php");
}
else
{

echo "<script>alert('Paymennt Failed')";


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
      <th scope="col"><a href="userhome.php">User Home</a></th>
      <th scope="col"><a href="view.php">View Ordered</a></th>
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


<form method="post" action="#">
	  <table width="50%" border="0" align="center">
        <tr>
          <td colspan="2"><span class="style1">Payment Mode.... </span></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label>
            <input type="image" name="imageField" src="images/payment.png" />
          </label></td>
        </tr>
        <tr>
          <td width="35%"><span class="style4">Amount</span> </td>
		  <td> <?php echo $price;?></td>
        </tr>
        <tr>
          <td height="33"><span class="style4">Enter Card Number </span></td>
          <td><input name="cno" type="text" id="cno" /></td>
        </tr>
        <tr>
          <td height="36"><span class="style4">CVV Number </span></td>
          <td><input name="cvv" type="password" id="cvv" /></td>
        </tr>
        <tr>
          <td><span class="style4">Card Name </span></td>
          <td><input name="cname" type="text" id="cname" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input name="btn" type="submit"value="Pay" /></td>
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