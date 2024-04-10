<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Usuario</title>
</head>
<body>
    <header>
        <h1>Usuario Cadastrado</h1>
    </header>
    <main>
        <?php 
        $nome = $_GET['nome'];//declara as mesmas variaveis do "name" la no html
        $sobrenome = $_GET['sobrenome'];
        //tratamento para verificar se a variavel ta sendo colocada ou nao

        if(!empty($_GET['nome'])){//empty - verifica se o campo esta vazio
            echo "<p> Bem vindo ao site $nome $sobrenome</p>";
        }else{
            echo"Não foram preenchidos todos os dados";
        }
        ?>
        <p><a href="javascript:history.go(-1)" >Voltar para a pagina anterior</a></p>
        <?php 


        //echo "Usuário cadastrado com sucesso!";

        
        
        
        ?>
    </main>
</body>
</html>