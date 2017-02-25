<?php
	require_once('db.php');
	$gd = json_decode(file_get_contents("php://input"));
	
	$sql = "INSERT INTO register(fname, lname, email, password, address, contact) 
			VALUES(
				'".MS($db, $gd->fname)."',
				'".MS($db, $gd->lname)."',
				'".MS($db, $gd->email)."',
				'".MS($db, $gd->pass)."',
				'".MS($db, $gd->addr)."',
				'".MS($db, $gd->con)."'
			)";
	if($db->query($sql)){
		echo "Insert Success";
	}
	else{
		echo $db->error;
	}
?>