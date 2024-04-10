<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>atividade</title>
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main style="text-align: center;">
    <?php
        $base = $_GET['altCima'];
        $base1 = $_GET['altBaixo'];
        $altura = $_GET['lado2'];
        $altura1 = $_GET['lado1'];


        if(isset($_GET['lado1']) && $_GET['lado1']>0 && $base>0){
            $area = ($altura * $base);
            $perimetro = ($altura*2) + ($base*2);
            echo "Area do retangulo é: $area<br>";
            echo "Perimetro do retangulo é: $perimetro";
        }
        else{
            echo "Area nao pode ser calculada pois um dos lados é igual a zero";
        }
    ?>

    <p><a href="javascript:history.go(-1)">Voltar para a pagina anterior</a></p>
    </main>
</body>
</html>