<?php
// Iniciar a sessão no início do arquivo
session_start();

// Conectar ao banco de dados
include('conexao.php');

// Verificar se CPF e senha foram enviados
if(isset($_POST['cpf']) || isset($_POST['senha'])) {

    // Validar se CPF e senha não estão vazios
    if(strlen($_POST['cpf']) == 0) {
        echo "Cadê o CPF?";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Vai logar sem senha?";
    } else {

        // Escapar os dados recebidos do formulário para evitar injeção SQL
        $cpf = $mysqli->real_escape_string($_POST['cpf']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        // Consultar o banco de dados para verificar se o CPF e a senha correspondem
        $sql_code = "SELECT * FROM entregadores WHERE cpf = '$cpf' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Erro na execução: " . $mysqli->error);

        // Verificar se o usuário foi encontrado
        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            // Armazenar dados do usuário na sessão
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['NomeMinion'];

            // Redirecionar para a página PIcarteiro.php
            header("Location: PIcarteiro.php");
            exit(); // Certifique-se de usar exit após o header para evitar execução adicional
        } else {
            echo "Usuário Inválido.";
        }

    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/stylecarteiro1.css">
    <title>Projeto Integrador</title>
</head>
<body>
<main id="container">
        <form id="login_form" action="" method="POST">
            <!-- FORM HEADER -->
            <div id="form_header">
                <img src="assets/imgs/planeta3.png" alt="" />
                <h1>  Mytour</h1>
                <i id="mode_icon" class="fa-solid fa-moon"></i>
                <img src="assets/imgs/planeta3.png" alt=""  />
            </div>
            <div> <h3></h3></div>

            <!-- SOCIAL MEDIA LINKS -->
            <div id="social_media">
                <a href="indexcarteiro.php">
                    <img src="assets/imgs/carteiro.png" alt="">
                </a>
                <a href="index.php">
                    <img src="assets/imgs/usuario1.png" alt="Google logo">
                </a>
                <a href="indexempresa.php">
                    <img src="assets/imgs/empresario.png" alt="">
                </a>
            </div>

        <!-- CPF -->
        <div class="input-box">
            <label for="cpf">
                CPF
                <div class="input-field">
                    <img src="assets/imgs/envelope.png" alt="">
                    <input type="text" name="cpf" required>
                </div>
            </label>
        </div>

        <!-- PASSWORD -->
        <div class="input-box">
            <label for="password">
                Password
                <div class="input-field">
                    <img src="assets/imgs/chave.png" alt="">
                    <input type="password" name="senha" required>
                </div>
</label>
        <!-- Forgot Password -->
        <div id="forgot_password">
            <a href="#">Esqueceu sua senha?</a>
        </div>

        <div class="botão">
            <p><button id="login_button" type="submit">Entrar</button></p>
        </div>
    </form>
</body>
</html>
