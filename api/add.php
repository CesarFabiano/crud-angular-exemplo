<?php
	require '../dbconfig.php';
	$habito = file_get_contents('php://input');
	$habito = json_decode($habito);

	$sql = "INSERT INTO habito (nome,status) VALUES ('".$habito->nome."','".$habito->status."')";
	$result = $mysqli->query($sql);

	$sql = "SELECT * FROM habito Order by id desc LIMIT 1"; 
	$result = $mysqli->query($sql);
	$data = $result->fetch_assoc();
	
	echo json_encode($data);
?>