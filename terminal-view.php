<?php
	require_once("db.php");
	header('Content-Type: application/json');
	 
	$sql = "select terminal.id, terminal.name, airport.name airportname from 
	airport, terminal where terminal.airportid = airport.id order by terminal.id desc";
	$sql = $db->query($sql);
	while($dt = $sql->fetch_assoc()){
		$data[] = $dt;
	}
	 echo json_encode($data);
?>