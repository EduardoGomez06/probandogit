<?php

$databaseHost = 'localhost';
$databaseName = 'bddpubliidad';
$databaseUsername = 'edgomez';
$databasePassword = 'Bestbrandgom';

$mysqli = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if($mysqli === false){
    die("ERROR: No se a podido conectar. " . $mysqli->connect_error);
}
?>


