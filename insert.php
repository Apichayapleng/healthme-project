<!DOCTYPE html>
<html>
<head>
	<title>
	<h1>frgnorehtiuretuhr</h1></title>

	<?php
		$hostname = "localhost";
		$user = "root";
		$password = '';
		$dbname = "mydb";


		$conn = new mysqli($hostname, $user, $password, $dbname);
		if($conn->connect_error){
			echo $conn->connect_error;
		}
		else{echo 'Yes We can conect DB';}

		// $data_id = $mysqli->real_escape_string($_REQUEST['data_id']);

		$sql = "INSERT INTO toi (data_id,weight,heigh,age) VALUES 
		('".$_POST["data_id"]."','".$_POST["weight"]."','".$_POST["heigh"]."','".$_POST["age"]."')";
		if($conn->query($sql)===true){
			echo "success";
		} else {
			echo "failed".$sql."<br>".$conn->error;
		}

		$input_for_search = data_id

		$sql_search = " SELECT * FROM menu
			            Where menu_id == '$input_for_search' "
			        
		$conn->close();
	?>
	
</head>
<body>

</body>
</html>