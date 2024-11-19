<?php

$usuario = 'Deivid';
$senha = 'a99029860A';
$database = 'loginPI';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("O PROJETO TA FALHANDO AAAHHHH " . $mysqli->error);
}