<?php
	require '../dbconfig.php';
	$id  = $_GET["id"];

	$sql = "SELECT * FROM habito WHERE id = '".$id."'"; 
	$result = $mysqli->query($sql);
	$data = $result->fetch_assoc();
	
	echo json_encode($data);
?>