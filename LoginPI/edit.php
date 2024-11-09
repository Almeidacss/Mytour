<?php
include_once('protect.php');

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM entregas WHERE id=$id";
    $result = $mysqli->query($sqlSelect);
    
    if ($result->num_rows > 0) {
        $user_data = mysqli_fetch_assoc($result);
        
        // Definindo as variáveis corretamente com os dados do banco de dados
        $Transportadora = $user_data['Transportadora'];
        $Codigo = $user_data['Codigo'];
        $Usuário = $user_data['Usuário'];
        $Telefone = $user_data['Telefone'];
        $Lancamento = $user_data['Lancamento'];
        $rastreamento = $user_data['rastreamento'];
        $Cidade = $user_data['Cidade'];
        $Estado = $user_data['Estado'];
        $Rua = $user_data['Rua'];
    } else {
        // Se não encontrar nenhum dado, redireciona ou mostra uma mensagem
        echo "Registro não encontrado!";
        exit();
    }
}

// Verifica se o formulário foi enviado
if (isset($_POST['update'])) {
    // Pegando os valores dos campos
    $Transportadora = $_POST['Transportadora'];
    $Codigo = $_POST['Codigo'];
    $Usuário = $_POST['Usuário'];
    $Telefone = $_POST['Telefone'];
    $Lancamento = $_POST['Lancamento'];
    $rastreamento = $_POST['rastreamento'];
    $Cidade = $_POST['Cidade'];
    $Estado = $_POST['Estado'];
    $Rua = $_POST['Rua'];

    // Atualiza os dados no banco de dados
    $sqlUpdate = "UPDATE entregas SET 
                    Transportadora = '$Transportadora',
                    Codigo = '$Codigo',
                    Usuário = '$Usuário',
                    Telefone = '$Telefone',
                    Lancamento = '$Lancamento',
                    rastreamento = '$rastreamento',
                    Cidade = '$Cidade',
                    Estado = '$Estado',
                    Rua = '$Rua' 
                    WHERE id = $id";

    // Executa a consulta e verifica se foi bem-sucedida
    if ($mysqli->query($sqlUpdate) === TRUE) {
        // Redireciona de volta para a página de pedidos após a atualização bem-sucedida
        header("Location: pedidos.php");
        exit();
    } else {
        // Caso haja erro na atualização
        echo "Erro ao atualizar os dados: " . $mysqli->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | GN</title>
    <style>
        /* Estilo geral da página */
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #5807db , #5807db);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        /* Caixa do formulário */
        .box {
            background-color: rgba(0, 0, 0, 0.8);
            color: #fff;
            border-radius: 15px;
            padding: 30px;
            width: 100%;
            max-width: 500px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2);
        }

        .box a {
            color: #fff;
            font-size: 16px;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 20px;
        }

        .box a:hover {
            color: #2575fc;
        }

        fieldset {
            border: none;
            margin-bottom: 20px;
        }

        /* Título com imagem ao lado */
        .title-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .title-container img {
            margin-right: 10px; /* Espaço entre a imagem e o título */
            width: 30px; /* Tamanho da imagem */
        }

        .title-container h2 {
            font-size: 24px;
            font-weight: bold;
            color: #fff; /* Cor do título ajustada para branco */
            margin: 0;
        }

        /* Estilos dos inputs */
        .inputBox {
            margin-bottom: 20px;
            position: relative;
        }

        .inputUser {
            background: transparent;
            border: 2px solid #fff; /* Cor inicial da borda */
            border-radius: 5px;
            outline: none;
            color: #fff;
            font-size: 16px;
            width: 100%;
            padding: 10px;
            transition: all 0.3s;
        }

        .inputUser:focus {
            border-color: #5807db; /* Cor da borda roxa ao clicar */
        }

        .labelInput {
            position: absolute;
            left: 10px;
            top: 10px;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: 0.3s;
        }

        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput {
            top: -18px;
            font-size: 12px;
            color: white;
        }

        /* Estilos do botão */
        #update {
            width: 100%;
            padding: 15px;
            background: #5807db; /* Cor do botão ajustada para roxo */
            border: none;
            border-radius: 10px;
            font-size: 18px;
            color: #fff;
            cursor: pointer;
            transition: background 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #update img {
            width: 25px; /* Tamanho da imagem dentro do botão */
            margin-right: 10px; /* Espaço entre a imagem e o texto */
        }

        #update:hover {
            background: #6a11cb;
        }

        #data_nascimento {
            border: 2px solid #fff;
            border-radius: 5px;
            color: #000; /* Cor do texto da data agora é preta */
            font-size: 16px;
            padding: 10px;
            width: 100%;
        }

        /* Responsividade para telas pequenas */
        @media (max-width: 600px) {
            .box {
                width: 90%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="box">
        <a href="pedidos.php"><img src="assets/imgs/voltar.png" alt="Voltar"></a>
        <div class="title-container">
            <img src="assets/imgs/caixa.png" alt="Ícone Título"> <!-- Imagem ao lado do título -->
            <h2>Encomenda</h2>
        </div>
        <form action="" method="POST">
            <fieldset>
                <legend></legend>
                <div class="inputBox">
                    <input type="text" name="Transportadora" id="nome" class="inputUser" value="<?php echo $Transportadora; ?>" required>
                    <label for="nome" class="labelInput">Transportadora</label>
                </div>
                
                <div class="inputBox">
                    <input type="text" name="Codigo" id="codigo" class="inputUser" value="<?php echo $Codigo; ?>" required>
                    <label for="codigo" class="labelInput">Código</label>
                </div>
                
                <div class="inputBox">
                    <input type="text" name="Usuário" id="usuario" class="inputUser" value="<?php echo $Usuário; ?>" required>
                    <label for="usuario" class="labelInput">Usuário</label>
                </div>
                
                <div class="inputBox">
                    <input type="tel" name="Telefone" id="telefone" class="inputUser" value="<?php echo $Telefone; ?>" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                
                <div class="inputBox">
                    <input type="text" name="rastreamento" id="rastreamento" class="inputUser" value="<?php echo $rastreamento; ?>" required>
                    <label for="rastreamento" class="labelInput">Rastreamento</label>
                </div>
                
                <div class="inputBox">
                    <input type="date" name="Lancamento" id="data_nascimento" value="<?php echo $Lancamento; ?>" required>
                </div>

                <div class="inputBox">
                    <input type="text" name="Cidade" id="cidade" class="inputUser" value="<?php echo $Cidade; ?>" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>

                <div class="inputBox">
                    <input type="text" name="Estado" id="estado" class="inputUser" value="<?php echo $Estado; ?>" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>

                <div class="inputBox">
                    <input type="text" name="Rua" id="rua" class="inputUser" value="<?php echo $Rua; ?>" required>
                    <label for="rua" class="labelInput">Rua</label>
                </div>

                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <!-- Botão com imagem -->
                <button type="submit" name="update" id="update">
                    <img src="assets/imgs/salva2.png" alt="Salvar"> 
                </button>
            </fieldset>
        </form>
    </div>
</body>
</html>
