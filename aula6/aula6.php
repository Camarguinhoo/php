<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 6 - Manipulacao de strings</title>
</head>
<body>
    <?php
        /*$nome = 'PHP';
        echo 'minha linguagem favorita é $nome' . '<br>';
        echo 'minha linguagem favorita é ' . $nome . '<br>';

        $nome01 = "JavaScript";
        echo "minha linguagem favorita é $nome01";

        echo "<br><br>";

        $teste = "php\u{1F418}";
        $teste = 'php\u{1F418}'; //Codigo unicode nao interpreta aspas simples.
        echo $teste;

        \u é chamado de sequencia de escape em php 
        é utilizado da versao 7 em diante para exibicao de caracteres
        especiais Unicode.*/
        /*
        $name = "Acelino";
        $sname = "Freitas";
        //echo "$name "Popo" $sname <br>"; //nao funciona 
        //Abaixo tem-se um erro semantico e nao um erro de sintaxe, CUIDADO!
        echo '$name "Popo" $sname <br>';
        echo "$name 'Popo' $sname <br>";
        echo "$name \"Popo\" $sname <br>";
        */

        //Sintaxe HEREDOC

        /*
        $nome02 = 'PHP';
        //$nome02 = "PHP";
        echo <<<TESTE
            Linguagem $nome02 é muito utilizada. <br>
        TESTE;

        echo "<br><br>";
        
        //Sintaxe NOWDOC
        //Aspas simples - nao ha interpretacao do conteudo
        //Aspas duplas - ha interpretacao do conteudo
        $nome03 = "Node";
        echo <<< "TESTE"
            Linguagem $nome03 é muito utilizada. <br>
        TESTE;
        */

        //Manipulacao de strings:
        /*
        $nome01Manipula = 'linguagem javascript';
        $nome02Manipula = 'linguagem python';
        $nome03Manipula = 'LINGUAGEM PHP';

        //strlen
        echo "O numero de caracteres é " . strlen($nome01Manipula);

        echo "<br><br>";

        //Converter o primeiro caracter de cada palavra para maiusculo.
        echo "Os caracteres iniciais das palavras " . ucwords($nome02Manipula) . " foram convertidas para maiusculas";

        echo "<br><br>";

        //Converte o primeiro caracter para maiusculo
        //Espacos sao interpretados
        echo "A primeira letra de uma das palavras foi convertida para 
        maiuscula " . ucfirst($nome01Manipula);

        echo "<br><br>";

        //Converte string para minuscula
        echo "A string " . strtolower($nome03Manipula) . " foi convertida para minuscula";

        echo "<br><br>";

        //Converte string para minuscula
        echo "A string " . strtoupper($nome02Manipula) . " foi convertida para maiuscula";

        echo "<br><br>";

        //substituir a string Linguagem pela string Aprendendo
        //str_replace(find, replace, string, count)
        echo str_replace('linguagem', 'Aprendendo' , $nome02Manipula );

        echo "<br><br>";

        //substr_replace(string, replacement, start, lenght)
        echo substr_replace($nome01Manipula , 'Eu gosto da ', 0, 0);

        echo "<br><br>";

        echo substr_replace($nome01Manipula , 'Node ', 10, 10);

        echo "<br><br>";

        //Retorno de parte de uma string
        //substr(string, start, lenght)
        echo "A funcao substr so retorna parte de uma string
        LINGUAGEM PHP, que é somente " . substr($nome03Manipula, 10, 3);
        */

        //Trabalhando com ARRAYS
        
        /*
        $primeiroArray = array(1, 2, 3, 4, 5);
        var_dump($primeiroArray);

        echo "<br><br>";

        $segundoArray = [1, 2, 3, 4, 5];
        var_dump($segundoArray);

        echo "<br><br>";

        $terceiroArray = array("Antonio", "Roberto", "Marcio", "Eduardo");
        var_dump($terceiroArray);

        echo "<br><br>";

        $array = array(
            "chave01" => "Primeiro valor",
            "chave02" => "Segundo valor",
        );
        
        echo $array["chave01"];
        echo "<br>";
        echo $array["chave02"];

        echo "<br><br>";

        $array01 = array(
            "nome" => "Thayris",
            "sobrenome" => "Mocrimbas",
            "idade" => "5",
            "ddd" => "92",
            "telefone" => "99029348",
        );

        foreach($array01 as $key => $dados){
            echo "$key = $dados <br>";
        }

        echo "<br><br>";

        $array02 = array(
            "cliente01" =>
            array(
                "nome" => "Craudia",
                "sobrenome" => "Koide",
                "ddd" => "92",
                "telefone" => "9969-9698",
            ),
            "cliente02" =>
            array(
                "nome" => "Cuca",
                "sobrenome" => "Beludo",
                "ddd" => "92",
                "telefone" => "9969-9698",
            ),
        );

        echo "O nome do primeiro cliente é " . $array02
        ["cliente01"]["nome"];

        echo "<br><br>";

        echo "O ddd do segundo cliente é " . $array02
        ["cliente02"]["ddd"];

        echo "<br><br>";

        foreach($array02 as $novo_array){
            foreach($novo_array as $key01 => $dados){
                echo "$key01 = $dados <br>";
            }
            echo "<hr>";
        }
        */

        //A funcao array_merge mescla dois ou mais arrays.
        $first = array("Hello", "World");
        $second = array("exit", " here");
        $merge = array_merge($first, $second);
        //echo $merge;
        //o print_r() apresenta os dados de um vetor em um formato que mostra as chaves e os respectivos conteudos
        print_r($merge); 
        echo "<br>";

        foreach($merge as $valor){
            echo "$valor" . " ";
        }

        echo "<br><br>";

        //A funcao array_sum soma os valores em um array
        $snumeros = array(98, 76, 56, 80);
        $total = array_sum($snumeros);
        echo $total;

        echo "<br><br>";

        /*A funcao array_diff() identifica os valores de um array
        que nao estao presentes em outros
        //Esta funcao compara os valores de dois (ou mais) array
        e retorna um array que contem as entradas do primeiro array que
        nao esta presentes dos demais arrays*/

        $var01 = array("bill", "claire", "ella", "simon", "judy");
        $var02 = array("jack", "claire", "toni");
        $diferenca = array_diff($var01, $var02);    
        print_r($diferenca);
    ?>
</body>
</html>