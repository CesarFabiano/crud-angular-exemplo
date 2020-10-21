<?php
require '../dbconfig.php';
$id  = $_GET["id"];
$sql = "DELETE FROM habito WHERE id = '".$id."'";
$result = $mysqli->query($sql);

echo json_encode([$id]);
?>