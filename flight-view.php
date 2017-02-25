<?php
	require_once("db.php");
	header('Content-Type: application/json');
	 
	$sql = "select flight.id, flight.name, airline.name airlinename from airline, flight where flight.airlineid = airline.id order by flight.id desc";
	$sql = $db->query($sql);
	while($dt = $sql->fetch_assoc()){
		$data[] = $dt;
	}
	 echo json_encode($data);
?>