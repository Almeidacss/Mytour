<?php
include('protectempresa.php');

if (isset($_POST['submit'])) {
    // Recuperando os dados do formulário
    $NomeMinion = $_POST['NomeMinion'];
    $Cargo = $_POST['Cargo'];
    $senha = $_POST['senha'];
    $cpf = $_POST['cpf'];
    $veiculo = $_POST['veiculo'];
    $Empresa = $_POST['Empresa'];
    $Codigo = $_POST['Codigo'];

    if ($mysqli->connect_error) {
        die('Conexão falhou: ' . $mysqli->connect_error);
    }

    // Realizando a inserção dos dados no banco
    $sqlInsert = "INSERT INTO entregadores (NomeMinion, Cargo, senha, cpf, veiculo, Empresa, Codigo) 
                  VALUES ('$NomeMinion', '$Cargo', '$senha', '$cpf', '$veiculo', '$Empresa', '$Codigo')";

    if ($mysqli->query($sqlInsert) === TRUE) {
        header('Location: carteiros.php');
        exit();
    } else {
        echo "Erro ao inserir no banco: " . $mysqli->error;
    }

    $mysqli->close();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Encomenda</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: linear-gradient(to right, #ff0040, #ff0040);
            color: #fff;
        }
        .form-container {
            background: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 15px;
            width: 100%;
            max-width: 600px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        fieldset {
            border: 2px solid #fff;
            padding: 20px;
            border-radius: 10px;
        }
        legend {
            font-size: 1.5rem;
            font-weight: 500;
            color: #fff;
            text-align: center;
            padding: 10px;
            border-radius: 8px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .legend-container {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .legend-container img {
            margin-right: 10px;
            width: 30px;
        }
        .inputBox {
            position: relative;
            margin-bottom: 20px;
        }
        .inputUser {
            background: none;
            border: none;
            border-bottom: 2px solid #fff;
            outline: none;
            color: white;
            font-size: 16px;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            transition: border-color 0.3s;
        }
        .inputUser:focus {
            border-color: #ff0040; /* Cor de foco igual ao fundo */
        }
        .labelInput {
            position: absolute;
            top: -10px;
            left: 0;
            font-size: 12px;
            color: #aaa;
            transition: 0.3s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput {
            top: -25px;
            font-size: 12px;
            color: #ff0040; /* Cor da animação igual ao restante */
        }
        #submit {
            background-color: #ff0040;
            width: 100%;
            border: none;
            padding: 15px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 10px;
            color: white;
            transition: background-color 0.3s;
        }
        #submit:hover {
            background-color: #ff0066;
        }
        #voltar {
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 18px;
            color: white;
            text-decoration: none;
            background: none;
        }
        #voltar img {
            vertical-align: middle;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <a id="voltar" href="carteiros.php">
        <img src="assets/imgs/voltar.png" alt="Voltar"> 
    </a>
    <div class="form-container">
        <form action="entregadores.php" method="POST">
            <fieldset>
                <legend>
                    <div class="legend-container">
                        <img src="assets/imgs/caixa.png" alt="Ícone Título">
                        <b>Cadastro de Funcionários</b>
                    </div>
                </legend>
                <div class="inputBox">
                    <input type="text" name="NomeMinion" id="NomeMinion" class="inputUser" required>
                    <label for="NomeMinion" class="labelInput">Nome do Minion</label>
                </div>
                <div class="inputBox">
                    <input type="text" name="Cargo" id="Cargo" class="inputUser" required>
                    <label for="Cargo" class="labelInput">Cargo</label>
                </div>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" class="inputUser" required>
                    <label for="cpf" class="labelInput">CPF</label>
                </div>
                <div class="inputBox">
                    <input type="text" name="veiculo" id="veiculo" class="inputUser" required>
                    <label for="veiculo" class="labelInput">Veículo</label>
                </div>
                <div class="inputBox">
                    <input type="text" name="Empresa" id="Empresa" class="inputUser" required>
                    <label for="Empresa" class="labelInput">Empresa</label>
                </div>
                <div class="inputBox">
                    <input type="text" name="Codigo" id="Codigo" class="inputUser" required>
                    <label for="Codigo" class="labelInput">Código</label>
                </div>
                <input type="submit" name="submit" id="submit" value="Cadastro">
            </fieldset>
        </form>
    </div>
</body>
</html>
