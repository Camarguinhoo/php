<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        /*
            1 - Variáveis sempre começam com o símbolo $;
            2 - Variáveis aceitam caracteres acentuados á, õ, ç, etc;
            3 - A linguagem é case sensitive em relação aos nomes.
            4 - Algumas palavras possuem uso reservado (&this por eexmplo);
            5 - Tente atribuir nomes claros e de fácil identificação as variáveis;
            6 - Evite nomes muito curtos ou muito longos.
        */


    echo "Hello World! <br>";
    $varPrint = print "Hello World! <br>";

    /*echo utiliza menos processamento do servidor
    em um projeto de pequeno porte nao faz muita
    diferença. */

    /*por padrao o print é sempre 1, que dentro do php significa
    verdeiro*/

    //jeitos errados

    //$%var01 = "Errada"; (ta errado)
    //$1var = "Errada"; (ta errado tambem)

    //jeitos corretos

    $var_01 = "Correto";
    echo $var_01;
    ?>
    <br>

    <?php

    $_var_01 = "Correto";
    echo $_var_01;

    ?>
    <br>
    <?php

        $varInt = 666;
        echo gettype($varInt);
    ?>
    <br>
    <?php
        $varDouble = 1000.52;
        echo gettype($varDouble);
    ?>
    <br>
    <?php
        $varBoolean = true;
        echo gettype($varBoolean);
    ?>
    <br>
    <?php
        $varVetor = array(1, 2, 3, 4, 5);
        echo gettype($varVetor);
    ?>
    <br>
    <?php
        $nome = "Carlos";
        $sobrenome = "Ferreira";
        echo "Muito prazer, $nome $sobrenome";
    ?>
    <br>
    <?php
        $nome = "Felipe";
        echo "Muito prazer, $nome $sobrenome";
        // nao é possivel guardar dois nomes na mesma variavel 
    ?>
    <?php
    ?>
    <br>
    <?php
        $var_00 = "Evoluindo: ";
        $var_01 = $var_00 . "no reconhecimento de variaveis <br>";

        echo $var_01; //retorno de variaveis contatenadas
    ?>
    <br>
    <?php
        $var03 = 2;
        $var04 = 7;
        $var05 = "11.32";

        echo ($var03 + $var04);
    ?>
    <br>
    <?php
        echo ($var04 ** $var03); //exponenciacao
    ?>
    <br>
    <?php
        echo pow($var04, $var03); //outra maneira de fazer exponenciacao
    ?>
    <br>
    <?php
        echo ($var04%$var03); //mod (resto da divisao)
    ?>
    <br>
    <?php
        echo ($var05 - $var03); //forma incorreta porem funciona (nao é o ideal)
    ?>
    <br>
    <?php
        echo $var03 += $var04; //operadores de atribuicao
    ?>
    <?php

        /*

        echo $pessoaNome; // imprime o valor de variavel na tela;
        $pessoaNome = "Joao da Silva"; //atribuindo um valor a uma variavel
        $pessoaNome . $pessoaSobrenome //concatena o conteudo das duas variaveis

        */

    ?>
    <br>
    <?php

        echo "<br>". gettype($var03);

        echo "<br>". gettype($var05);

    ?>
    <br>
    <?php

        $var06 = (float)$var05; //muda o tipo de variavel
        echo "<br>" . gettype($var06); //resultado da variavel ja trocada

    ?>
    <br>
    <?php

        $varTeste_01 = 33;
        var_dump($varTeste_01);

    ?>
    <br>
    <?php

    $vetorTeste = array("Java" , "Python" , "JavaScript" , "PHP");
    var_dump($vetorTeste);

    ?>
    <br>
    <?php

    $linguagens = array(
        array("PHP" , "PHP: HyperText PreProcessor"),
        array("SQL" , "SQL: Structured Query Language")
    );
    var_dump($linguagens[1] [1]);

    ?>

</body>
</html>