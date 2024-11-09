<?php

include('conexao.php');

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
                <a href="PIempresa.php">
                    <span class="icon"><img src="assets/imgs/home.png" alt=""></span>
                    <span class="title">Principal</span>
        </a>
        </li>
        
</div>
<div class="tabela">
        <div class="conteudoinicial">
<h1> ➟ Mytour - Bem Vindo <?php echo $_SESSION['nome']; ?> </h1> 
<h3>𝘓𝘰𝘳𝘦𝘮 𝘐𝘱𝘴𝘶𝘮 𝘪𝘴 𝘴𝘪𝘮𝘱𝘭𝘺 𝘥𝘶𝘮𝘮𝘺 𝘵𝘦𝘹𝘵 𝘰𝘧 𝘵𝘩𝘦 𝘱𝘳𝘪𝘯𝘵𝘪𝘯𝘨 𝘢𝘯𝘥 𝘵𝘺𝘱𝘦𝘴𝘦𝘵𝘵𝘪𝘯𝘨 𝘪𝘯𝘥𝘶𝘴𝘵𝘳𝘺. 𝘓𝘰𝘳𝘦𝘮 𝘐𝘱𝘴𝘶𝘮 𝘩𝘢𝘴 𝘣𝘦𝘦𝘯 𝘵𝘩𝘦 𝘪𝘯𝘥𝘶𝘴𝘵𝘳𝘺'𝘴 𝘴𝘵𝘢𝘯𝘥𝘢𝘳𝘥 𝘥𝘶𝘮𝘮𝘺 𝘵𝘦𝘹𝘵 𝘦𝘷𝘦𝘳 𝘴𝘪𝘯𝘤𝘦 𝘵𝘩𝘦 1500𝘴, 𝘸𝘩𝘦𝘯 𝘢𝘯 𝘶𝘯𝘬𝘯𝘰𝘸𝘯 𝘱𝘳𝘪𝘯𝘵𝘦𝘳 𝘵𝘰𝘰𝘬 𝘢 𝘨𝘢𝘭𝘭𝘦𝘺 𝘰𝘧 𝘵𝘺𝘱𝘦 𝘢𝘯𝘥 𝘴𝘤𝘳𝘢𝘮𝘣𝘭𝘦𝘥 𝘪𝘵 𝘵𝘰 𝘮𝘢𝘬𝘦 𝘢 𝘵𝘺𝘱𝘦 𝘴𝘱𝘦𝘤𝘪𝘮𝘦𝘯 𝘣𝘰𝘰𝘬. 𝘐𝘵 𝘩𝘢𝘴 𝘴𝘶𝘳𝘷𝘪𝘷𝘦𝘥 𝘯𝘰𝘵 𝘰𝘯𝘭𝘺 𝘧𝘪𝘷𝘦 𝘤𝘦𝘯𝘵𝘶𝘳𝘪𝘦𝘴, 𝘣𝘶𝘵 𝘢𝘭𝘴𝘰 𝘵𝘩𝘦 𝘭𝘦𝘢𝘱 𝘪𝘯𝘵𝘰 𝘦𝘭𝘦𝘤𝘵𝘳𝘰𝘯𝘪𝘤 𝘵𝘺𝘱𝘦𝘴𝘦𝘵𝘵𝘪𝘯𝘨, 𝘳𝘦𝘮𝘢𝘪𝘯𝘪𝘯𝘨 𝘦𝘴𝘴𝘦𝘯𝘵𝘪𝘢𝘭𝘭𝘺 𝘶𝘯𝘤𝘩𝘢𝘯𝘨𝘦𝘥. 𝘐𝘵 𝘸𝘢𝘴 𝘱𝘰𝘱𝘶𝘭𝘢𝘳𝘪𝘴𝘦𝘥 𝘪𝘯 𝘵𝘩𝘦 1960𝘴 𝘸𝘪𝘵𝘩 𝘵𝘩𝘦 𝘳𝘦𝘭𝘦𝘢𝘴𝘦 𝘰𝘧 𝘓𝘦𝘵𝘳𝘢𝘴𝘦𝘵 𝘴𝘩𝘦𝘦𝘵𝘴 𝘤𝘰𝘯𝘵𝘢𝘪𝘯𝘪𝘯𝘨 𝘓𝘰𝘳𝘦𝘮 𝘐𝘱𝘴𝘶𝘮 𝘱𝘢𝘴𝘴𝘢𝘨𝘦𝘴, 𝘢𝘯𝘥 𝘮𝘰𝘳𝘦 𝘳𝘦𝘤𝘦𝘯𝘵𝘭𝘺 𝘸𝘪𝘵𝘩 𝘥𝘦𝘴𝘬𝘵𝘰𝘱 𝘱𝘶𝘣𝘭𝘪𝘴𝘩𝘪𝘯𝘨 𝘴𝘰𝘧𝘵𝘸𝘢𝘳𝘦 𝘭𝘪𝘬𝘦 𝘈𝘭𝘥𝘶𝘴 𝘗𝘢𝘨𝘦𝘔𝘢𝘬𝘦𝘳 𝘪𝘯𝘤𝘭𝘶𝘥𝘪𝘯𝘨 𝘷𝘦𝘳𝘴𝘪𝘰𝘯𝘴 𝘰𝘧 𝘓𝘰𝘳𝘦𝘮 𝘐𝘱𝘴𝘶𝘮.</h3>
<img src="mascote.png" alt="">        
</div>
        <div class="imageminicial">
            <img src="assets/imgs/.jpg" alt="">
        </div>
    </div>
    <main class="cards">
        <section class="card contact">
            <div class="icon">
                <img src="assets/imgs/card.png" alt="Contact us.">
            </div>
            <h3>➛Pedidos</h3>
            <span>Entre aqui para ver os seus pedidos.</span>
            <button>Acessar</button>
        </section>
        <section class="card shop">
            <div class="icon">
                <img src="assets/imgs/card.png" alt="Shop here.">
            </div>
            <h3>➛Rastreamento</h3>
            <span>Entre nessa página para ver por onde anda a sua entrega.</span>
            <button>Acessar</button>
        </section>
        <section class="card about">
            <div class="icon">
                <img src="assets/imgs/card.png" alt="About us.">
            </div>
            <h3>➛Suporte</h3>
            <span>Veja esta página caso necessite de ajuda de nossos funcionários.</span>
            <button>Acessar</button>
        </section>
        <section class="card shop">
            <div class="icon">
                <img src="assets/imgs/card.png" alt="Shop here.">
            </div>
            <h3>➛Configuração</h3>
            <span>Acesse as configurações para deixar o site mais confortável para você.</span>
            <button>Acessar</button>
        </section>
        <section class="card about">
            <div class="icon">
                <img src="assets/imgs/card.png" alt="About us.">
            </div>
            <h3>➛Seus Dados</h3>
            <span>Atualizar seus dados.</span>
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