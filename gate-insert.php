<?php
	require_once('db.php');
	$gd = json_decode(file_get_contents("php://input"));
	
	$sql = "INSERT INTO gate(name, terminalid) 
			VALUES(
				'".MS($db, $gd->name)."',
				'".MS($db, $gd->getid)."'
			)";
	if($db->query($sql)){
		echo "Insert Success";
	}
	else{
		echo $db->error;
	}
?>