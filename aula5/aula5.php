<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 5</title>
</head>
<body>
    <?php

        function minhaPrimeiraFuncao()
        {
            echo "Minha primeira funcao";
        }

        minhaPrimeiraFuncao();

        echo "<br><br>";

        function minhaFuncao()
        {
            return "Usando o return pela primeira vez. ";
            echo "Minha segunda chamada";
        }    

        echo minhaFuncao();

        echo "<br><br>";

        function minhaOutraFuncao()
        {
            return "Usando o return pela segunda vez. ";
            echo "Minha terceira funcao";
        }
        $var = minhaOutraFuncao();
        echo $var;

        echo "<br><br>";

        function exponenciacao($num01, $num02)
        {
            $total = pow($num01, $num02);
            return $total;
        }

        echo "O resultado da operacao de exponenciacao é. " . exponenciacao(5,3);

        echo "<br><br>";

        function referencia(&$num_03)
        {
            $num_03 *= 5;
            return $num_03;
        }

        $num_04 = 4;
        referencia($num_04);
        echo $num_04;

        echo "<br><br>";

        /*function passagem_padrao($num_05 = 14)
        {
            return $num_05;
        }

        echo passagem_padrao();*/

        echo "<br><br>";

        function divisao($num01, $num02)
        {
            $operacao =($num01/$num02);
            echo "O resultado é. ";
            $operacao;
        }
        
        divisao(2, 2);

        /*
            - is_bool() - Verifica se a variavel é um booleano;
            - is_int() - Verifica se a variavel é inteiro;
            - is_numeric() - Verifica se a variavel é um numero ou uma string;
            - is_string() - Verifica se a variavel é uma strinh;
            - is_array() - Verifica se a variavel é um array;
            - is_float() - Verifica se a varivel é um float;
            - is_object() - Verifica se a varivael é um objeto;

        */

         function conversao($var)
         {
            if(is_float($var))
            {
                return $var;
            }
            else
            {
                return (float)$var;
            }
         }  
         
         $var_01 = "7";
         echo "<br> Variavel ainda nao foi convertida: ";
         echo gettype($var_01);

         $var_01 = conversao($var);
         echo "<br> Variavel convertida para float: ";
         echo gettype($var_01);

         echo "<br><br>";

        /* Suponha que voce queira criar um sistema que 
         calcule o valor dos descontos mensais de funcionario de uma academia

         - Salario <= R$ 2.000,00 - Desconto igual a 12,5% do salario bruto;
         - Salario > R$ 2.000,00 e Salario <= R$ 3.000,00 - Desconto igual
         a 22,5% do salario bruto mais uma contribuicao para a previdencia social de R$ 50,00;
         - Salario > R$ 3.500,00 - Desconto igual 27,5% do salario bruto mais uma contribuicao
         para a previdencia social de R$75,00
         Os valores de desconto devem apresentar duas casas decimais depois da virgula.
         - Informe no navegador o nome do funcionario e o valor do desconto.
         
         */

         function Descontos($salario, $nome)
         {
            if($salario <= 2000){
                $desconto = ($salario*12.5)/100;
                $salario -=  ($salario*12.5)/100;
                echo "Nome: $nome". " " . "Salario: " . " " . number_format($salario,2,",",".") . " " . "Desconto: "  . " " . number_format($desconto,2,",",".");
            }
            else if($salario > 2000 && $salario < 3000){
                $desconto = (($salario*22.5)/100)-50;
                $salario -= (($salario*22.5)/100)-50;
                echo "Nome: $nome". " " . "Salario: " . " " . number_format($salario,2,",",".") . " " . "Desconto: " .  " " . number_format($desconto,2,",",".");
            }
            else if($salario > 3500){
                $desconto = (($salario*27.5)/100)-75;
                $salario -= (($salario*27.5)/100)-75;
                echo "Nome: $nome". " " . "Salario: " . " " . number_format($salario,2,",",".") . " " . "Desconto: "  . " " . number_format($desconto,2,",",".");
            }
         }
         $nome = "Juliana";
         $salario = 2500;
         Descontos($salario, $nome);
    ?>
    <br><br>

    <?php
        //INCLUDES E REQUIRES

         /*include("./pagina.php");
         echo "<hr>";
         include_once("./pagina.php");*/

         
         /*include("./pagina.php");
         echo "<hr>";
         require("./pagina.php");*/

         
         /*include_once("./pagina.php");
         echo "<hr>";
         require_once("./pagina.php");*/

         $var_01 = 1;
         $var_02 = "3";
         $resultado = "";

         function identidade($x, $y, $r)
         {
            $r=($x==$y)?"SIM" : "NAO";
            echo "As variaveis A e B sao iguais? $r . 
            O tipo da variavel informada é " . gettype($x) . "<br>";
            
            $r=($x===$y)?"SIM" : "NAO";
            echo "As variaveis A e B sao identicas? $r . 
            O tipo da variavel informada é " . gettype($y) . "<br>";
         }

         $varFuncao = identidade($var_01, $var_02, $resultado);
         echo "$varFuncao <br>";

    ?>
</body>
</html>