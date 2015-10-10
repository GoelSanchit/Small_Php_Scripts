<?php

$con=mysql_connect('Host_Name','User_Name','Password')or die("cannot connect");;
mysql_select_db("Database_Name" , $con);

$message=$_POST['message'];

mysql_query("insert into insert(message) values('$message')");

mysql_close($con);
?>
