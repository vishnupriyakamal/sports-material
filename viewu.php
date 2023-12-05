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




<table width="95%" align="center">


		
	<tr>
		<td colspan="10" align="center">User Details</td>
  </tr>


	<tr>
		<td colspan="10">&nbsp;</td>
  </tr>
	
		    <tr>
          <td width="6%">&nbsp;</td>
          <td width="11%"><div align="center" class="style6"><strong>Id</strong> </div></td>
		  <td width="16%"><div align="center" class="style6"><strong>Name</strong> </div></td>
		  <td width="16%"><div align="center" class="style6"><strong>Age</strong> </div></td>
		   <td width="18%"><div align="center" class="style6"><strong>Email</strong> </div></td>
		   <td width="14%"><div align="center" class="style6"><strong>Phone</strong> </div></td>
		    
			 <td width="19%"><div align="center" class="style6"><strong>Address</strong> </div></td>
        </tr>
		<tr>
		<td colspan="10">&nbsp;</td>
		</tr>
		<?php
		$qry=mysql_query("select * from register");
		$i=1;
		while($row=mysql_fetch_array($qry))
		{
		?>
        <tr>
		 <td width="6%">&nbsp;</td>
		    <td><div align="center"><?php echo $row['id'];?></div></td>
			  <td><div align="center"><?php echo $row['name'];?></div></td>
		   <td><div align="center"><?php echo $row['age'];?></div></td>
			  <td><div align="center"><?php echo $row['email'];?></div></td>
			 <td><div align="center"><?php echo $row['phone'];?></div></td>
			   
			     <td><div align="center"><?php echo $row['address'];?></div></td>
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