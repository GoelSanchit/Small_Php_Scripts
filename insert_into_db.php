<?ph

$con=mysql_connect('Host_Name','User_Name','Password')or die("cannot connect");;
mysql_select_db("Data_Base_Name" , $con);

$name=$_POST['name'];
$mobile=$_POST['mobile'];
$deal=$_POST['deal'];
$salon=$_POST['salon'];

mysql_query("insert into newtable(name, mobile,deal,salon) values('{$name}','{$mobile}','{$deal}','{$salon}')");

//mysql_close($con);
?>
