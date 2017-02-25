<?php
	require_once("db.php");
	header('Content-Type: application/json');
	 
	$sql = "select details.id, details.sheduleTime, details.estimatedTime,
	details.flightid, details.fromid, details.presentLocationid, 
	details.destinationid, details.terminalid, details.status,
	flight.name flightname from flight, gate where details.flightid=flight.id,
	airport.name airportname from airport, gate where details.fromid=airport.id,
	airport.name airportname from airport, gate where details.presentLocationid=airport.id,
	airport.name airportname from airport, gate where details.destinationid=airport.id,
	terminal.name terminalname from terminal, gate where details.terminalid=terminal.id by gate.id desc";
	$sql = $db->query($sql);
	while($dt = $sql->fetch_assoc()){
		$data[] = $dt;
	}
	 echo json_encode($data);
?>