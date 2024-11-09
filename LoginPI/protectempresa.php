<?php
// Inclui o arquivo de conexão com o banco de dados
include('conexao.php');

// Inicia a sessão, caso ainda não tenha sido iniciada
if (!isset($_SESSION)) {
    session_start();
}

// Verifica se o usuário está logado com base na sessão
if (!isset($_SESSION['id'])) {
    die("Você não pode acessar esta página porque não está logado.<p><a href=\"indexempresa.php\">Entrar</a></p>");
}

// Aqui você pode adicionar o código da página que deve ser acessível apenas por usuários logados
?>
