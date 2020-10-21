<?php
require '../dbconfig.php';

$id  = $_GET["id"];

$habito = file_get_contents('php://input');
$habito = json_decode($habito);
$sql = "UPDATE habito SET nome = '".$habito->nome."', status = '".$habito->status."' WHERE id = '".$id."'";
$result = $mysqli->query($sql);

$sql = "SELECT * FROM habito WHERE id = '".$id."'"; 
$result = $mysqli->query($sql);
$data = $result->fetch_assoc();

echo json_encode($data);
?>