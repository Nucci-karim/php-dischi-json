<?php
$jsonDischi = file_get_contents("dischi.json");

$listaDischi = json_decode($jsonDischi, true);

$result = $listaDischi;

header('Content-type: application/json');
echo json_encode($result);

?>