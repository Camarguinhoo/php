<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula 3</title>
</head>
<body>
    <?php 
        $varA = 10;
        $varB = 10;

        /*if($varA == $varB){
            echo "Os numeros $varA e $varB sao iguais!";
        }

        echo "<br><br>";*/

        /*if($varA >= $varB){
            echo "o numero $varA e maior que o $varB";
        }
        else
        {
            echo "Os numeros $varA nao é menor que o $varB";
        }*/

        /*$varC = 5;
        $varD = 8;

        if($varC == $varD){
            echo "As variaveis $varC e $varD sao iguais";
        }
        elseif($varC > $varD){
            echo "$varC é maior que $varD";
        }
        elseif($varC < $varD){
            echo "$varC é menor que $varD";
        }
        elseif($varC == 1){
            echo "$varC é igual a 1";
        }*/

        /*$varIdade = 18;
        $varPeso = 150;
        $risco = "";

        if($varIdade < 18 and $varPeso <50){
            $risco = "Medio";
            echo "A idade é $varIdade e o peso é $varPeso." . " A pessoa esta no grupo de risco $risco";
        }
        elseif($varIdade<18 and ($varPeso >= 60 and $varPeso<= 90)){
            $risco = "Normal";
            echo "A idade é $varIdade e o peso é $varPeso." . " A pessoa esta no grupo de risco $risco";
        }
        elseif($varIdade < 18 and ($varPeso > 90 and $varPeso <= 120)){
            $risco = "Alto";
            echo "A idade é $varIdade e o peso é $varPeso." . " A pessoa esta no grupo de risco $risco";
        }
        elseif($varIdade < 18 and $varPeso > 120){
            $risco = "Risco extremamente alto";
            echo "A idade é $varIdade e o peso é $varPeso." . " A pessoa esta no grupo de risco $risco";
        }
        elseif(($varIdade>= 18 and $varIdade <= 50) and $varPeso <60){
            $risco = "Risco Medio";
            echo "A idade é $varIdade e o peso é $varPeso." . " A pessoa esta no grupo de risco $risco";
        }
        elseif(($varIdade>= 18 and $varIdade <=50) and ($varPeso >= 70 and $varPeso <= 100)){
            $risco =  "Risco Normal";
            echo "A idade é $varIdade e o peso é $varPeso." . " A pessoa esta no grupo de risco $risco";
        }
        elseif(($varIdade >= 18 and $varIdade <=50) and ($varPeso >100 and $varPeso <=140)){
            $risco = "Risco Alto";
            echo "A idade é $varIdade e o peso é $varPeso." . " A pessoa esta no grupo de risco $risco";
        }
        elseif(($varIdade >=18 and $varIdade <=50) and $varPeso >140){
            $risco = "Risco extremamente alto";
            echo "A idade é $varIdade e o peso é $varPeso." . " A pessoa esta no grupo de risco $risco";
        }*/

        //------------------TERNARIO------------------------//

        /*$idade01 = 17;
        $situacao = $idade01 >=18 ? "Adulto" : "Adolescente";

        echo "O aluno é: $situacao";*/

        //-------------------SWITCH-----------------------//

        /*$pais = "Brasil";
        switch($pais){
            case "Brasil" :
                echo "O pais escolhido é o Brasil";
                break;
            case "Alemanha" :
                echo "O pais escolhido é a Alemanha";
                break;
            case "Japao" :
                echo "O pais escolhido é o Japao";
                break;
                default:
                    echo "Escolha uma das opcoes: ";
                    break;
        }

        echo "<br><br>";

        $pais_01 = "Brasil";

        echo match($pais_01){
            "Brasil" => "O pais escolhido é o Brasil",
            "Alemanha" => "O pais escolhido é a Alemanha",
            "Japao" =>  "O pais escolhido é o Japao",
            default => "Escolha uma das opcoes: ",
        };*/

        /* Desenvolva um programa onde seja informada a idade de uma pessoa, fazendo-se as
        seguintes consideracoes:

        - Idade menor que 5 anos, nao pertence a nenhuma categoria;
        - Idade maior ou igual a 5 anos e menor que 8 anos, categoria infantil;
        - Idade maior ou igual a 8 anos e menor que 12, categoria juvenil;
        - Idade maior ou igual a 12 anos e menor que 17, categoria adolescente;
        - Idade maior ou igual a 17 anos e menor 40 categoria adulto;
        - Idade maior ou igual a 40 anos e menor que 60 categoria senior.*/

        /*$idade = 54;
        
        echo match(true){
            $idade<5 => "Não pertence a nenhuma categoria",
            $idade >=5 and $idade<8 => "Categoria Infantil",
            $idade >=8 and $idade<12 => "Categoria Juvevil",
            $idade >=12 and $idade<17 => "Categoria Adolescente",
            $idade >=17 and $idade<40 => "Categoria Adulto",
            $idade >=40 and $idade <60 => "Categoria Senior",
            default => "Categoria Idoso ",
        };*/

    ?>
</body>
</html>