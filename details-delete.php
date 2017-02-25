<?php
	require_once('db.php');
	$gd = json_decode(file_get_contents("php://input"));
	
	$sql = "delete from details where id ='".MS($db, $gd->id)."'";
	if($db->query($sql)){
		echo "Delete Success";
	}
	else{
		echo $db->error;
	}
?>