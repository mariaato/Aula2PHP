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
            background-color: black;
        }






    </style>
</head>
<body>
    <?php
    //adição
    $valor1 = 10;
    $valor2 = 3;
    $soma = $valor1 + $valor2;
    echo "<h1> Adição </h1>";
    echo "valor 1 = " . $valor1 . "<br>";
    echo "valor 2 = " . $valor2 . "<br>";
    echo "soma = " . $soma . "<br>";

    //subtração
    $valor3 = 20;
    $valor4 = 8;
    $subtracao = $valor3 - $valor2;
    echo "<h1> Subtração </h1>";
    echo "valor 1 = " . $valor3 . "<br>";
    echo "valor 2 = " . $valor4 . "<br>";
    echo "subtração = " . $subtracao . "<br>";


     //multiplicação
     $valor5 = 6;
     $valor6 = 4;
     $multiplicacao = $valor5 - $valor6;
     echo "<h1> Multiplicação </h1>";
     echo "valor 1 = " . $valor5 . "<br>";
     echo "valor 2 = " . $valor6 . "<br>";
     echo "Multiplicação = " . $multiplicacao . "<br>";


    //Divisão
    $valor7 = 15;
    $valor8 = 3;
    $divisao = $valor7 - $valor8;
    echo "<h1> Divisão </h1>";
    echo "valor 1 = " . $valor7 . "<br>";
    echo "valor 2 = " . $valor8 . "<br>";
    echo "Divisão = " . $divisao . "<br>";


    
    //Modulo
    $valor9 = 15;
    $valor10 = 3;
    $modulo = $valor9 - $valor10;
    echo "<h1> Módulo </h1>";
    echo "valor 1 = " . $valor9 . "<br>";
    echo "valor 2 = " . $valor10 . "<br>";
    echo "Módulo = " . $modulo . "<br>";


    //Atribuição com  Adição
    echo "<h1> Atribuição com Adição </h1>";
    $valor = 5;
    $valor += 3;
    echo "Valor após atribuição com adição: " . $valor;

    
    //Atribuição com  Subtração
    echo "<h1> Atribuição com Subtração </h1>";
    $Valor = 10;
    $Valor -= 4;
    echo "Valor após atribuição com subtração: " . $valor;


    
    //Atribuição com  Multiplicação
    echo "<h1> Atribuição com Multiplicação </h1>";
    $VAlor = 7;
    $VAlor *= 2;
    echo "Valor após atribuição com multiplicação: " . $valor;

    
    //Atribuiçãp com Divisão
    echo "<h1> Atribuição com Divisão </h1>";
    $Valor = 24;
    $Valor /= 3;
    echo "Valor após atribuição com divisão: " . $valor;


    //Outras operações matematicas em php
    //A função pi() retorna o valor de pi:
    echo "<h1>Função Pi</h1>";
    echo(pi());

    //AS funções min() e max() podem ser usadas para encontrar o valor mais baixo ou mais alto em uma lista de argumentos:
    echo "<h1> Função minimo e maximo </h1>";
    echo "MINIMO: " . (min(0, 150, 30, 20, -8, -200)) . "<br>";
    echo "MAXIMO: " .(max(0, 150, 30, 20, -8, -200));

    //A função abs() retorna  o valor absoluto (positivo) de um número:
    echo "<h1>Função abs(valor positivo)</h1>";
    echo(abs(-6.7));


    //Função sqrt() retorna a raiz quadrada de um numero
    echo "<h1>Função sqrt(raiz quadrada)</h1>";
    echo(sqrt(25));


    //Função round() arredonda um numero de ponto flutuante para seu inteiro mais proximo:

    echo "<h1>Função round(arredondar)</h1>";
    echo "Arredondar 0.60 : " . (round(0.60)). "<br>";
    echo "Arredondar 0.49 : " .(round(0.49)) . "<br>";

    //A função rand() gera um numero aleatorio:
    echo "<h1>Função rand(número aleatorio)</h1>";
    echo(rand());

    //Se você quiser um inteiro aleatorio entre 10 e 100:
    echo "<h1>Função rand( 10, 100)</h1>";
    echo(rand(10,100));





    













?>
</body>
</html>