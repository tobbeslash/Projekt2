<?php
header("Access-Control-Allow-Origin:*");
include_once("server.php");
$serverObj = new Server();
$data = $serverObj->GetPokemonTypes();
$serverObj = null;
echo json_encode($data);
?>