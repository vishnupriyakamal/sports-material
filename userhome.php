<?php
session_start();
include("dbconnect.php");
extract($_POST);
$uid=$_SESSION['id'];

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

<table width="48%" align="center" >
<tr>
<td width="32%">&nbsp;</td>
<td width="30%">&nbsp;</td>
<td width="33%">&nbsp;</td>
<td width="4%">&nbsp;</td>
<td width="1%">&nbsp;</td>
</tr>
<?php
$qry=mysql_query("select * from material");
while($row=mysql_fetch_array($qry))
{
?>
<tr>
<td colspan="2" align="center"><img src="images\<?php echo $row['img'];?>"width="150" height="100"></td>
</tr>
<tr>
<td>Material Name</td>
<td><?php echo $row['name'];?></td>
</tr>
<tr>
<td>Price</td>
<td><?php echo $row['price'];?></td>
</tr>
<tr>
<td>Description</td>
<td><?php echo $row['desc'];?></td>
		
  </tr>	
  <tr>
<td colspan="2"><a href="payment.php?id=<?php echo $row['id'];?>&price=<?php echo $row['price'];?>">Order</a></td>
		
  </tr>	
  <?php
  }
  ?>
</table>

 
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