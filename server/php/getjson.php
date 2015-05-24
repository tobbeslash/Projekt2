<?php
header("Access-Control-Allow-Origin:*");
include("server.php");
$serverObj = new Server();
$data = $serverObj->GetPokemon();
$serverObj = null;
echo json_encode($data);
?>