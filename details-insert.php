<?php
	require_once('db.php');
	$gd = json_decode(file_get_contents("php://input"));
	
	$sql = "INSERT INTO details(sheduleTime, estimatedTime, flightid, fromid, presentLocationid, destinationid, terminalid, status) 
			VALUES(
				'".MS($db, $gd->shedulename)."',
				'".MS($db, $gd->estimatedname)."'
				'".MS($db, $gd->flightid)."',
				'".MS($db, $gd->departureid)."'
				'".MS($db, $gd->presentid)."',
				'".MS($db, $gd->destinationid)."'
				'".MS($db, $gd->terminalid)."',
				'".MS($db, $gd->statusname)."'
			)";
	if($db->query($sql)){
		echo "Insert Success";
	}
	else{
		echo $db->error;
	}
?>