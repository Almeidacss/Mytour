<?php
    // Verifica se o botão de atualização foi pressionado
    include_once('protect.php');

    if(isset($_POST['update']))
    {
        // Recuperando os dados do formulário
        $Transportadora = $_POST['Transportadora'];
        $Codigo = $_POST['Codigo'];
        $Usuário = $_POST['Usuário'];
        $Telefone = $_POST['Telefone'];
        $Lancamento = $_POST['Lancamento'];
        $rastreamento = $_POST['rastreamento'];
        $Cidade = $_POST['Cidade'];
        $Estado = $_POST['Estado'];
        $Rua = $_POST['Rua'];
        
        // Recupera o ID do registro a ser atualizado
        $id = $_POST['id']; // Certifique-se de que o campo 'id' está presente no formulário

        // Atualiza o banco de dados com os novos dados
        $sqlUpdate = "UPDATE entregas 
                      SET Transportadora='$Transportadora',
                          Codigo='$Codigo',
                          Usuário='$Usuário',
                          Telefone='$Telefone',
                          rastreamento='$rastreamento',
                          Lancamento='$Lancamento',
                          Cidade='$Cidade',
                          Estado='$Estado',
                          Rua='$Rua'
                      WHERE id=$id";

        // Executa a query
        if ($mysqli->query($sqlUpdate) === TRUE) {
            // Se a atualização for bem-sucedida, redireciona para a página de pedidos
            header('Location: pedidos.php');
            exit(); // Certifique-se de chamar exit() após header
        } else {
            // Se ocorrer um erro, exibe uma mensagem
            echo "Erro ao atualizar registro: " . $mysqli->error;
        }
    }
?>
