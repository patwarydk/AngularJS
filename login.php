<?php
	require_once("db.php");
	$gd = json_decode(file_get_contents("php://input"));
	 
	$sql = "select * from register where email='".MS($db, $db->email)."' and password='".MS($db, $db->pass)."'";
	$sql = $db->query($sql);
	if($sql->num_rows > 0){
		echo 2;
	}
	else{
		echo 0;	
	}
?>