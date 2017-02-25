<?php
	$db = new mysqli("localhost", "root", "", "angularjs");
	
	function MS($link, $data){
		return mysqli_real_escape_string($link, $data);
	}
?>