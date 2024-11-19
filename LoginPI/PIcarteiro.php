<?php

include('protectempresa.php');
$sql = "SELECT * FROM entregas ORDER BY id DESC";
$result = $mysqli->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mytour - Pedidos</title>
    <link rel="stylesheet" href="assets/css/inicialcarteiro.css">
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
                <h3>Gerencie suas entregas com eficiência e agilidade — Conectando sua empresa ao futuro da logística!</h3>
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
                    <span class="title">Pedidos</span>
        </a>
        </li>
        <li class="list">
                <a href="carteiros.php">
                    <span class="icon"><img src="assets/imgs/pacote.png" alt=""></span>
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
<div class="lista">
    <style>
        .lista {
            background: linear-gradient(to right, white, white);
            border-radius: 15px 15px 0 0;
            padding: 20px;
            color: white;
            text-align: center;
            font-family: Arial, sans-serif;
        }

        .table-container {
            margin: 20px;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #ffffff; /* Fundo da tabela agora é branco */
            border-radius: 8px;
            overflow: hidden;
            font-size: 0.9em;
            color: #000000; /* Texto agora é preto */
        }

        table thead {
            background-color: #1E90FF; /* Cabeçalho da tabela com fundo preto */
            color: #ffffff; /* Texto do cabeçalho em branco */
        }

        table th, table td {
            padding: 12px 15px;
            text-align: center;
            border: 1px solid #000000; /* Bordas das células em preto */
        }

        table tbody tr:nth-child(even) {
            background-color: #f2f2f2; /* Linhas pares com fundo cinza claro */
        }

        table tbody tr:hover {
            background-color: #e0e0e0; /* Efeito hover com fundo cinza mais claro */
        }

        .btn {
            display: inline-block; /* Coloca os botões lado a lado */
            padding: 5px 10px;
            margin: 2px;
            text-decoration: none;
            color: #ffffff;
            border-radius: 5px;
            font-size: 0.8em;
        }

        .btn-primary {
            background-color: white; /* Cor do botão de edição */
        }

        .btn-danger {
            background-color: black; /* Cor do botão de exclusão */
        }
        .button-with-image {
            background: none; /* Remove a cor de fundo */
            border: none; /* Remove a borda do botão */
            padding: 0; /* Remove o padding */
            cursor: pointer;
        }
        .button-with-image img {
            width: 20px; /* Tamanho da imagem */
            height: 20px;
            vertical-align: middle;
        }
        .button-with-image:hover img {
            opacity: 0.8; /* Efeito visual quando passa o mouse na imagem */
        }

    </style>

    <div class="table-container">
        <table class="table-bg">
            <thead>
                <tr>
                <th>
                    <!-- Link com o botão -->
                    <a href="encomendas.php"> <!-- Substitua 'pagina_destino.php' pela URL de destino -->
                        <button class="button-with-image">
                            <img src="assets/imgs/adicionar.png" alt="Icon"> <!-- Caminho da imagem -->
                        </button>
                    </a>
    </th>
                    <th>Transportadora</th>
                    <th>Código</th>
                    <th>Usuário</th>
                    <th>Telefone</th>
                    <th>Lançamento</th>
                    <th>Rastreamento</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th>Endereço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$user_data['id']."</td>";
                        echo "<td>".$user_data['Transportadora']."</td>";
                        echo "<td>".$user_data['Codigo']."</td>";
                        echo "<td>".$user_data['Usuário']."</td>";
                        echo "<td>".$user_data['Telefone']."</td>";
                        echo "<td>".$user_data['Lancamento']."</td>";
                        echo "<td>".$user_data['rastreamento']."</td>";
                        echo "<td>".$user_data['Cidade']."</td>";
                        echo "<td>".$user_data['Estado']."</td>";
                        echo "<td>".$user_data['Rua']."</td>";
                        echo "<td>
                            <a class='button-with-image' href='delete.php?id={$user_data['id']}' title='Deletar'>
    <img src='assets/imgs/confirma.png' alt='Deletar' width='16' height='16'>
</a>

                        </td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>



</body>
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