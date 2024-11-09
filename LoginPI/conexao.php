<?php

$usuario = 'root';
$senha = '';
$database = 'loginPI';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("O PROJETO TA FALHANDO AAAHHHH " . $mysqli->error);
}