<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
    *{
        text-align: center;
    }

    h1{
        color: pink;
    }

    h2{
        background-color: pink;
    }
    
</style>
</head>
<body>
    <?php

    //Declaração de Variaveis
    echo "<h2>Declaração de Variaveis</h2>";
    $inteiro = 4; //inteiro
    $pontoFlutuante = 2.4;  //float
    $nome = "Isabele"; // string
    $sobreNome = 'Antunes'; //string
    $decisao = TRUE; // booleano


    // Saída de dados
    echo "<br/>"; // Quebra de linha
    echo "<br/>"; // Quebra de linha
    echo "<h1>Inteiro</h1>";
    echo $inteiro; // Exibe o valor da variável $inteiro
    echo "<br/>"; // Quebra de linha
    echo "<br/>"; // Quebra de linha
    echo "<h1>Float</h1>";
    echo $pontoFlutuante; // Exibe o valor da variável $pontoFlutuant
    echo "<br/>"; // Quebra de linha
    echo "<br/>"; // Quebra de linha
    echo "String</h1>";
    echo $nome; // Exibe o valor da variável $nome
    echo "<br/>"; // Quebra de linha
    echo "<br/>"; // Quebra de linha
    echo $sobreNome; // Exibe o valor da variável $sobreNome
    echo "<br/>"; // Quebra de linha
    echo "<br/>"; // Quebra de linha
    echo "<h1>bolleano</h1>";
    echo $decisao; // Exibe o valor da variável $decisao
    echo "<br/>"; // Quebra de linha




    // Array de cidades
    echo "<h2>Array</h2>";

    $cidades = array(1 => "Palhoca", 2 => "Florianopolis", 3 => "Campeche");
    // Atribuição de valores do array a variáveis individuais
    list($a, $b, $c) = array ("joao", "maria", "carlos");
    // Definição de uma constante pi
    
    $raio = 2;
    define("pi", 3.1415926536);
    $circunf = 2* pi * $raio;

    // Saída de dados 
    echo "<br/>";
    // Quebra de linha 
    echo "<h1>var_dump</h1>";
    var_dump($cidades); // Exibe informações sobre a variável $cidades 
    echo "<br/>"; // Quebra de linha 
    echo "<br/>"; // Quebra de linha
    echo "<h1>print_r</h1>"; 
    print_r ($cidades); // Exibe o conteúdo do array $cidades 
    echo "<br/>"; // Quebra de linha 
    echo "<br/>"; // Quebra de linha
    echo "<h1>Definição de uma constante</h1>";
    echo $circunf; // Exibe o valor da variável $circunf 
    echo "<br/>"; // Quebra de linha


    // Funções de manipulação de strings 
    echo "<h2>Manipulação de string</h2>";
    echo "<br/>"; // Quebra de linha
    echo "<br/>"; // Quebra de linha
    $nome = "faculdade municipal";
    echo "<h1>strtoupper - Maiusculas</h1>";
    echo strtoupper ($nome); // Transforma a string em maiúsculas
    echo "<br/>"; // Quebra de linha
    echo "<br/>"; // Quebra de linha
    echo "<h1>strtolower - minusculas</h1>";
    echo strtolower ($nome); // Transforma a string em minúsculas
    echo "<br/>"; // Quebra de linha
    echo "<br/>"; // Quebra de linha
    echo "<h1>ucwords</h1>";
    echo ucwords($nome); // Transforma as primeiras letras de cada palavra em maiúsculas
    echo "<br/>"; // Quebra de linha
    echo "<br/>"; // Quebra de linha
    echo "<h1>ucfirst</h1>";
    echo ucfirst($nome); // Transforma a primeira letra da string em maiúscula
    echo "<br/>"; //. Quebra de linha
    echo "<br/>"; // Quebra de linha
    echo "<h1>str_replace</h1>";
    $nome = str_replace("e", "&", $nome); // Substitui o caractere "e" por "&"
    echo $nome;
    echo "<br/>"; // Quebra de linha
    echo "<br/>"; // Quebra de linha

    // Manipulação de strings 2
    echo "<h2>Manipulação de string 2</h2>";
    $frase = "eh um teste"; // Define a string $frase
    $q = strpos($frase, "teste"); // Retorna a posição inicial da palavra "teste" na string e armazena em $q 
    var_dump($q); // Exibe o valor de $a, que será a posição inicial da palavra "teste" na string $frase 
    echo "<br/>"; // Quebra de linha 
    echo "<br/>"; // Quebra de linha

    $texto = substr($frase, 0, $q); // Retorna parte da string, do índice 0 até a posição de "teste" 
    echo $texto; // Exibe a substring $texto 
    echo"<br/>"; // Quebra de linha 
    echo "<br/>"; // Quebra de linha

    $texto2 = substr($frase, $q); // Retorna parte da string, a partir da posição de "teste" 
    echo $texto2; // Exibe a substring $texto2 
    echo"<br/>"; // Quebra de linha 
    echo "<br/>"; // Quebra de linha

    // Tamanho da string
    echo strlen($frase); // Exibe o tamanho da string $frase 
    echo "<br/<"; // Quebra de linha 
    echo "<br/>"; // Quebra de linha




    ?>


</body>
</html>