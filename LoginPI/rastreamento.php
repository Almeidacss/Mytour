<?php

include('protect.php');
if(!isset($_SESSION)){
    session_start();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mytour - Rastreamento</title>
    <link rel="stylesheet" href="assets/css/inicial2.css">
    <script src="script.js"></script>
</head>
<body>
    <!-- Cabeçalho e relógio -->
  <header id="header">
    <div class="container">
        <div class="flex">
            <a href=""><img src="assets/imgs/planeta3.png" alt=""></a>

            <nav>
                <ul>
                <h3>Envie suas mensagens pelo cosmos: o correio que liga você ao infinito</h3>
</ul>
</nav>
            <div class="clock">
        <div>
            <span id="hours">00</span>
            <span class="tempo">Horas</span>
        </div>

        <div>
            <span id="minutes">00</span>
            <span class="tempo">Minutos</span>
        </div>
        <div>
            <span id="seconds">00</span>
            <span class="tempo">Segundos</span>
        </div>
            </div>
                
    </div>
</div>
</body>
<body>
</div>
     <!-- Barra de navegação -->
    
<div class="menuzinho">
<div class="navegação">
        <ul>
            <li class="list active">
                <a href="PIInicial.php">
                    <span class="icon"><img src="assets/imgs/home.png" alt=""></span>
                    <span class="title">Principal</span>
        </a>
        </li>
        <li class="list">
                <a href="pedidos.php">
                    <span class="icon"><img src="assets/imgs/pacote.png" alt=""></span>
                    <span class="title">Meus pedidos</span>
        </a>
        </li>
        <li class="list">
                <a href="rastreamento.php">
                    <span class="icon"><img src="assets/imgs/avião.png" alt=""></span>
                    <span class="title">Rastreamento</span>
        </a>
        </li>
        <li class="list">
                <a href="suporte.php">
                    <span class="icon"><img src="assets/imgs/atendimento.png" alt=""></span>
                    <span class="title">Suporte</span>
        </a>
        </li>
        <li class="list">
                <a href="config.php">
                    <span class="icon"><img src="assets/imgs/configurações.png" alt=""></span>
                    <span class="title">Configurações</span>
        </a>
        </li>
        <li class="list">
                <a href="dados.php">
                    <span class="icon"><img src="assets/imgs/prancheta.png" alt=""></span>
                    <span class="title">Meus Dados</span>
        </a>
        </li>
        <li class="list">
                <a href="logout.php">
                    <span class="icon"><img src="assets/imgs/logout.png" alt=""></span>
                    <span class="title">Desconetar</span>
        </a>
        </li>
</div>
<div class="tabela">
<h1>Testando</h1>
</div>
</div>

    
    

    <!-- Funcionamento Relógio -->
<script>
    const hoursElement   = document.getElementById('hours')
const minutesElement = document.getElementById('minutes')
const secondsElement = document.getElementById('seconds')


function fixTime(time){
    return time < 10 ? '0'+time : time
}

function newTime(){
    const date    = new Date()
    const hours   = date.getHours()
    const minutes = date.getMinutes()
    const seconds = date.getSeconds()
    
    hoursElement.textContent   = fixTime(hours)
    minutesElement.textContent = fixTime(minutes)
    secondsElement.textContent = fixTime(seconds)
}

newTime()
setInterval(newTime, 1000)
    </script>
</html>