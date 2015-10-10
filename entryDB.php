<?php

$con=mysql_connect('mysql2.000webhost.com','a9431695_sanchit','')or die("cannot connect");;
mysql_select_db("a9431695_insert" , $con);

$message=$_POST['message'];

mysql_query("insert into insert(message) values('$message')");

mysql_close($con);
?>
