<?php

$con=mysql_connect('mysql2.000webhost.com','','')or die("cannot connect");;
mysql_select_db("" , $con);

$message=$_POST['message'];

mysql_query("insert into insert(message) values('$message')");

mysql_close($con);
?>
