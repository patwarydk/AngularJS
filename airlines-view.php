<?php
	require_once("db.php");
	header('Content-Type: application/json');
	 
	$sql = "select * from airline order by id desc";
	$sql = $db->query($sql);
	while($dt = $sql->fetch_assoc()){
		$data[] = $dt;
	}
	 echo json_encode($data);
?>