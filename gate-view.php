<?php
	require_once("db.php");
	header('Content-Type: application/json');
	 
	$sql = "select gate.id, gate.name, terminal.name terminalname from 
	terminal, gate where gate.terminalid = terminal.id order by gate.id desc";
	$sql = $db->query($sql);
	while($dt = $sql->fetch_assoc()){
		$data[] = $dt;
	}
	 echo json_encode($data);
?>