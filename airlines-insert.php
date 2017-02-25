<?php
	require_once('db.php');
	$gd = json_decode(file_get_contents("php://input"));
	
	$sql = "INSERT INTO airline(name) 
			VALUES(
				'".MS($db, $gd->name)."'
			)";
	if($db->query($sql)){
		echo "Insert Success";
	}
	else{
		echo $db->error;
	}
?>