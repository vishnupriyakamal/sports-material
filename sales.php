<?php
session_start();
include("dbconnect.php");
extract($_POST);
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



<table width="95%" align="center">
	
	
	
	<tr>
		<td colspan="10" align="center">Sales  Details</td>
  </tr>

	
	<tr>
		<td colspan="10">&nbsp;</td>
  </tr>
	
		    <tr>
          <td width="6%">&nbsp;</td>
          <td width="11%"><div align="center" class="style6"><strong>Id</strong> </div></td>
		  <td width="16%"><div align="center" class="style6"><strong>Material Image</strong> </div></td>
		   <td width="18%"><div align="center" class="style6"><strong>Material Name</strong> </div></td>
		    <td width="16%"><div align="center" class="style6"><strong>Customer Name</strong> </div></td>
			 <td width="19%"><div align="center" class="style6"><strong>Customer Address</strong> </div></td>
			   <td width="14%"><div align="center" class="style6"><strong>Contact No</strong> </div></td>
			   
        </tr>
		<tr>
		<td colspan="10">&nbsp;</td>
		</tr>
		<?php
		$qry=mysql_query("select * from paid where status='2'");
		$i=1;
		while($row=mysql_fetch_array($qry))
		{
		$uid=$row['uid'];
		$mid=$row['mid'];
		
		$qry1=mysql_query("select * from material where id='$mid'");
		$row1=mysql_fetch_array($qry1);
		$qry2=mysql_query("select * from register where id='$uid'");
		$row2=mysql_fetch_array($qry2);
		
		?>
        <tr>
		 <td width="6%">&nbsp;</td>
		    <td><div align="center"><?php echo $row1['id'];?></div></td>
			  <td><div align="center"><img src="images\<?php echo $row1['img'];?>"  width="100" height="100"/></div></td>
		   <td><div align="center"><?php echo $row1['name'];?></div></td>
			    <td><div align="center"><?php echo $row2['name'];?></div></td>
			   <td><div align="center"><?php echo $row2['address'];?></div></td>
			   <td><div align="center"><?php echo $row2['phone'];?></div></td>
			    </tr>

		 <tr>
		  	 	<td>&nbsp;</td>
		   		<td>&nbsp;</td>
				<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
				<td width="19%">&nbsp;</td>
		
		
		</tr>
		
        <?php
		$i++;
		}
		
		if($_REQUEST["act"]==('add'))
	{
	$uid=$_REQUEST['uid'];
	
	$qt=mysql_query("update paid set status='2' where uid='$uid'");
	echo "Delivered Sucessfully";
	
	
	
	}
	?>
		
		
		
				<tr>
		<td colspan="10" align="center">&nbsp;</td>
		</tr>
		
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