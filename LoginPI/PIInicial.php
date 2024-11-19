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
    <title>Mytour - Home</title>
    <link rel="stylesheet" href="assets/css/inicial.css">
    <script src="script.js"></script>
</head>
<body>
    <!-- Cabeçalho e relógio -->
  <header id="header">
    <div class="container">
        <div class="flex">
            <a href=""><img src="assets/imgs/planetab.png" alt=""></a>

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
                    <span class="icon"><img src="assets/imgs/hme.png" alt=""></span>
                    <span class="title">Principal</span>
        </a>
        </li>
        <li class="list">
                <a href="pedidos.php">
                    <span class="icon"><img src="assets/imgs/pacoteb.png" alt=""></span>
                    <span class="title">Meus pedidos</span>
        </a>
        </li>
        <li class="list">
                <a href="rastreamento.php">
                    <span class="icon"><img src="assets/imgs/aviãobranco1.png" alt=""></span>
                    <span class="title">Rastreamento</span>
        </a>
        </li>
        <li class="list">
                <a href="suporte.php">
                    <span class="icon"><img src="assets/imgs/atendimentob.png" alt=""></span>
                    <span class="title">Suporte</span>
        </a>
        </li>
        <li class="list">
                <a href="config.php">
                    <span class="icon"><img src="assets/imgs/engrenagem.png" alt=""></span>
                    <span class="title">Configurações</span>
        </a>
        </li>
        <li class="list">
                <a href="dados.php">
                    <span class="icon"><img src="assets/imgs/pranchetab.png" alt=""></span>
                    <span class="title">Meus Dados</span>
        </a>
        </li>
        <li class="list">
                <a href="logout.php">
                    <span class="icon"><img src="assets/imgs/logoutb.png" alt=""></span>
                    <span class="title">Desconetar</span>
        </a>
        </li>
</div>
<div class="tabela">
        <div class="conteudoinicial">
        <h1> ➟ Mytour - Bem Vindo <?php echo $_SESSION['nome']; ?> </h1> 
        
<h3>"Bem-vindo ao nosso portal de transporte de encomendas! Aqui, conectamos você à eficiência e segurança no transporte dos seus itens, com uma plataforma criada com dedicação e inovação por um jovem programador. Simplifique suas entregas e acompanhe tudo em um só lugar. Obrigado por confiar no nosso trabalho – juntos, vamos levar suas encomendas mais longe!"</h3>
<div class="spaced-container">
    <div class="image-text-wrapper">
        <img src="assets/imgs/qrcode.png" alt="" class="imagem">
        <div class="texto">
            <div>Projeto Integrador - Unifagoc</div>
            <div>Professor - Paulo Ricardo</div>
        </div>
    </div>

</div>
      <style>
        .spaced-container {
    padding-top: 60px; /* Ajuste o valor conforme necessário */
}

.image-text-wrapper {
    display: grid;
    grid-template-columns: auto 1fr; /* Duas colunas: imagem e texto */
    align-items: center; /* Alinha a imagem e o texto verticalmente */
    gap: 20px; /* Espaçamento entre a imagem e o texto */
}

.imagem {
    width: 150px; /* Ajuste o tamanho da imagem conforme necessário */
    height: auto; /* Mantém a proporção da imagem */
}

.texto {
    font-size: 18px;
    color: #fff;
}

.texto div {
    margin-bottom: 8px; /* Espaçamento entre as linhas de texto */
}

}

      </style>
</div>
        
        <div class="imageminicial">
            <img src="assets/imgs/header-img.svg" alt="">
        </div>
    </div>
    <main class="cards">
        <section class="card contact">
            <div class="icon">
                <img src="assets/imgs/terra.png" alt="Contact us.">
            </div>
            <h3>➛Pedidos</h3>
            <span>Entre aqui para ver os seus pedidos.</span>
            <button>Acessar</button>
        </section>
        <section class="card shop">
            <div class="icon">
                <img src="assets/imgs/sol.png" alt="Shop here.">
            </div>
            <h3>➛Rastreamento</h3>
            <span>Entre nessa página para ver por onde anda a sua entrega.</span>
            <button>Acessar</button>
        </section>
        <section class="card about">
            <div class="icon">
                <img src="assets/imgs/lunar.png" alt="About us.">
            </div>
            <h3>➛Suporte</h3>
            <span>Veja esta página caso necessite de ajuda de nossos funcionários.</span>
            <button>Acessar</button>
        </section>
        <section class="card shop">
            <div class="icon">
                <img src="assets/imgs/cometa.png" alt="Shop here.">
            </div>
            <h3>➛Configuração</h3>
            <span>Acesse as configurações para deixar o site mais confortável para você.</span>
            <button>Acessar</button>
        </section>
    </main>
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