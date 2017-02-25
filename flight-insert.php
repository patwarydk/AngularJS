<?php
	require_once('db.php');
	$gd = json_decode(file_get_contents("php://input"));
	
	$sql = "INSERT INTO flight(name, airlineid) 
			VALUES(
				'".MS($db, $gd->name)."',
				'".MS($db, $gd->flightid)."'
			)";
	if($db->query($sql)){
		echo "Insert Success";
	}
	else{
		echo $db->error;
	}
?>