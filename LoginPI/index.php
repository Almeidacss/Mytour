<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Onde ta o gmail?";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Vai logar sem senha?";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Péssimo programador " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: PIInicial.php");

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
    <link rel="stylesheet" href="assets/css/style2.css">
    
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
                <!-- Logo 1 -->
                <a href="indexcarteiro.php">
                    <img src="assets/imgs/carteiro.png" alt="">
                </a>
            <!-- Logo 2 -->
                <a href="index.php">
                    <img src="assets/imgs/usuario1.png" alt="Google logo">
                </a>
                <!-- GITHUB -->
                <a href="indexempresa.php">
                    <img src="assets/imgs/empresario.png" alt="">
                </a>
            </div>

        <!-- EMAIL -->
        <div class="input-box">
                    <label for="email">
                        E-mail
                        <div class="input-field">
                        <img src="assets/imgs/envelope.png" alt="">
                            <input type="text" name="email">
                        </div>
                    </label>
                </div>
        <!-- PASSWORD -->
        <div class="input-box">
                    <label for="password">
                        Password
                        <div class="input-field">
                        <img src="assets/imgs/chave.png" alt="">
                            <input type="password" name="senha">
                        </div>
                    </label>
        <!-- Fornecedor -->
        <div id="forgot_password">
                        <a href="#">
                            Esqueceu sua senha?
                        </a>
                    </div>
        <div class="botão">
        <p>
            <button id="login_button" type="submit">Entrar</button>
            <a id="login_button" href="formulario.php">Cadastre-se</a>
        </p>
</div>
    </form>
</body>
</html>