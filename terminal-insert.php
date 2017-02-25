<?php
	require_once('db.php');
	$gd = json_decode(file_get_contents("php://input"));
	
	$sql = "INSERT INTO terminal(name, airportid) 
			VALUES(
				'".MS($db, $gd->name)."',
				'".MS($db, $gd->terminalid)."'
			)";
	if($db->query($sql)){
		echo "Insert Success";
	}
	else{
		echo $db->error;
	}
?>