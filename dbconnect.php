<?php
$connect=mysql_connect("localhost","root","");
mysql_select_db("sports_material",$connect);

$connect=mysqli_connect("localhost","root","","sports_material") or die ("connection error") ;
?>