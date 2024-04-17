<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Aula 8</title>
</head>
<body>
    <div class="container">
    <?php
        /*
            Crie um formulario onde o usuario informe os seguintes dados:
            -Nome
            -Email
            -Assunto
            -Valor custo
            -Valor venda
            -Conteudo

            -Dados nao devem ser enviados se algum campo estiver vazio
            -Dados nao devem ser enviados se o preco de venda for menor
            que o preco de custo
            -Dados nao devem ser enviados se o email for invalido
            -Deve-se implementar uma mascara para os inputs
            que contem valor monetario
            -Mensagem(ns) para o usuario devem ser apresentados em caso
            de sucesso ou erro
        */

        if (isset($_POST['enviarMsg'])){
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $assunto = $_POST['assunto'];
            $valorCusto = $_POST['valorcusto'];
            $valorVenda = $_POST['valorvenda'];
            $conteudo = $_POST['conteudo'];

            if(empty($_POST['nome']) || 
            empty($_POST['email']) || 
            empty($_POST['assunto']) || 
            empty($_POST['valorcusto']) || 
            empty($_POST['valorvenda']) || 
            empty($_POST['conteudo'])) {
            echo "<p style = 'color:red;'>Erro! Por favor, preencha todos os campos.</p>";
            }   
            if($valorVenda < $valorCusto){
                echo "O preco de venda precisa ser maior que o preco de custo";
            }

            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                echo "<p style = 'color:red;'>Por favor, insira um endereço de email válido.</p>";
            }

            else if(($valorVenda > $valorCusto) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                echo "<p style = 'color:green;'>Dados enviados com sucesso!</p>";
            }
        }
    
    ?>
    </div>
</body>
</html>