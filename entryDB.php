<?php

$con=mysql_connect('Host_Name','User_Name','Password')or die("cannot connect");
mysql_select_db("Database_Name" , $con);

$name=$_POST['name'];
$age =$_POST['age'];
$mobile = $_POST['mobile'];

mysql_query("insert into myTableName(name,age,mobile) values('$name','$age','$mobile')");

mysql_close($con)
?>
