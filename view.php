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


	<table width="100%" align="center">
	
	
	<tr>
		<td colspan="10" align="center">Material Booking Details</td>
	  </tr>
	
	
	<tr>
		<td colspan="10">&nbsp;</td>
	  </tr>
	
		    <tr>
          <td width="9%">&nbsp;</td>
          <td width="14%"><div align="center" class="style6"><strong>Id</strong> </div></td>
		  <td width="15%"><div align="center" class="style6"><strong>Material Name</strong> </div></td>
		   <td width="13%"><div align="center" class="style6"><strong>Price</strong> </div></td>
			 <td width="18%"><div align="center" class="style6"><strong>Description</strong> </div></td>
			  <td width="19%"><div align="center" class="style6"><strong>Status</strong> </div></td>
        </tr>
		<tr>
		<td colspan="10">&nbsp;</td>
		</tr>
		<?php
		$qry=mysql_query("select * from paid where uid='$uid'");
		$i=1;
		while($row=mysql_fetch_array($qry))
		{
		$mid=$row['mid'];
		$status=$row['status'];
		$qr=mysql_query("select * from material where id='$mid'");
		$row1=mysql_fetch_array($qr)
		
		?>
        <tr>
		 <td width="9%">&nbsp;</td>
		    <td><div align="center"><?php echo $row1['id'];?></div></td>
		   <td><div align="center"><?php echo $row1['name'];?></div></td>
			 <td><div align="center"><?php echo $row1['price'];?></div></td>
			    <td><div align="center"><?php echo $row1['desc'];?></div></td>	
				  <td><div align="center"><?php if($status=='1')
				  
				  					{
									
									echo "Ordered ";
									
									}
									
									
									else
									{
									
									echo "delivered";
									}
				  
				  					?>
				  </div></td>	 
        </tr>

		 <tr>
		  	 	<td>&nbsp;</td>
		   		<td>&nbsp;</td>
				<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
				<td width="12%">&nbsp;</td>
		
		
		</tr>
		
		<?php
		
		}
		
		?>
		
		
		
				<tr>
		<td colspan="10" align="center">&nbsp;</td>
		</tr>
		
</table>




  
  <div> &nbsp;</div>
<br>
<br>
<div id="footer"> <p>copyrights & designedby@Karate MAnagement</p>
</div>