<?php 
header('Content-Type: application/json');

$url = $_POST['url']; 

$json = file_get_contents('https://na.api.pvp.net/'.$url.'?api_key=a56bbf60-8082-43cd-9c6c-d2e917a06c28');

$obj = json_decode($json);
echo json_encode($obj, JSON_PRETTY_PRINT);
?>