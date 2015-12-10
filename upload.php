<?ph

include("index.html");

if($_POST['submit']) {
	$name = $_FILES['upload']['name'];
	$temp = $_FILES['upload']['tmp_name'];
	$type = $_FILES['upload']['type'];
	$size = $_FILES['upload']['size'];
	
  if(($type == "image/jpeg") || ($type == "image/jpg") || ($type == "image/gif") || ($type == "image/png")){
	  
		if ($size <= 100000 ){
		
		
		move_uploaded_file($temp,"images/$name");
		echo "<img src='images/$name'>";
		
		
		}else{
			
			echo "The file: $name is tooo Big ......<br>
			The Size is $size and it need to be less than 10kb.";
		}
	
	
}else{
	
	echo "This type $type is not allowed";
	
}

	
}else{
	
	header("Location: index.html");
}
	


?>
