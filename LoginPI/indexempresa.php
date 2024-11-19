<?php
include('conexao.php');

if (isset($_POST['cnpj']) || isset($_POST['senha'])) {

    if (strlen($_POST['cnpj']) == 0) {
        echo "Onde tá o CNPJ?";
    } else if (strlen($_POST['senha']) == 0) {
        echo "Vai logar sem senha?";
    } else {
        $cnpj = $mysqli->real_escape_string($_POST['cnpj']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM empresa WHERE cnpj = '$cnpj' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Péssimo programador " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {
            $empresa = $sql_query->fetch_assoc();

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $empresa['id'];
            $_SESSION['nome'] = $empresa['nome'];

            header("Location: PIempresa.php");
            exit; // Boa prática para evitar que o código continue após o redirecionamento
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
    <link rel="stylesheet" href="assets/css/styleempresa.css">
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

        <!-- CNPJ -->
        <div class="input-box">
            <label for="cnpj">
                CNPJ
                <div class="input-field">
                    <img src="assets/imgs/envelope.png" alt="">
                    <input type="text" name="cnpj" required>
                </div>
            </label>
        </div>
       <!-- SENHA -->
       <div class="input-box">
            <label for="password">
                Password
                <div class="input-field">
                    <img src="assets/imgs/chave.png" alt="">
                    <input type="password" name="senha" required>
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
           
        </p>
</div>
    </form>
</main>
</body>
</html>
