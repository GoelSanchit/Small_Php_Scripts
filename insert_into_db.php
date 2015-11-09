<?php

$con=mysql_connect('Host_Nameamerd("cannot connect");;
mysql_select_db("a9431695_insert" , $con);

$name=$_POST['name'];
$mobile=$_POST['mobile'];
$deal=$_POST['deal'];
$salon=$_POST['salon'];

mysql_query("insert into newtable(name, mobile,deal,salon) values('{$name}','{$mobile}','{$deal}','{$salon}')");

//mysql_close($con);
?>
