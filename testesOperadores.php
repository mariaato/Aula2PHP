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




        </style>
</head>
<body>
    <?php

    // Operadores de atribuição
    echo "<h1>Operadores de atribuição</h1>";
    $nome = "felipe"; // Atribuindo valor à variável $nome 
    echo $nome . "antunes"; // Concatenando valor à string $nome 
    echo "'<br>";
    // Concatenação composta: $nome terá o valor dela mesma mais o termo "Programacao"
    $nome .= "Programacao";
    echo $nome;
    echo "<br>";
    $valorTotal = 0;
    $valorTotal += 100; // Adição: $valorTotal agora é 100 
    $valorTotal += 25; // Adição: $valorTotal agora é 125
    $valorTotal -= 12; // Subtração: $valorTotal agora é 113 
    $valorTotal *= .1; // Multiplicação: $valorTotal agora é 11.3 (10% de 113) 
    echo $valorTotal;
    echo"<br>";
    echo "<br>";
    // Operadores aritméticos
    $a = 10;
    $b = 2;
    echo $a + $b; // Soma: exibe 12 
    echo "<br>";
    echo $a - $b; // Subtração: exibe 8 
    echo "<br>";
    echo $a * $b; // Multiplicação: exibe 20 
    echo "<br>";
    echo $a / $b;
    // Divisão: exibe 5
    echo "<br>";
    echo $a % $b; // Resto da divisão: exibe 0
    echo "<br>";
    echo $a ** $b; // Potenciação: exibe 100
    echo "<br>";
    echo "<br>";


    // Operadores lógicos 
    $a = 30;
    $b = 15;
    echo "<h1>Operadores lógicos</h1>";
    var_dump($a > $b); // Maior que: exibe true 
    echo "<br>";
    var_dump($a < $b); // Menor que: exibe false 
    echo "<br>";
    var_dump($a == $b); // Igual: exibe false (se mudar para $a - $b, o valor de Sa será 30) 
    echo "<br>";
    var_dump($a === $b); // Idêntico: exibe false (se mudar para $a - 55 e $b - 55.0, será false) 
    echo "<br>";
    var_dump($a != $b); // Diferente: exibe true 
    echo "<br>";
    var_dump($a !== $b); // Não idêntico: exibe true 
    echo "<br>";
    
//Este operador é útil em situações onde é necessário ordenar elementos ou comparar valores de forma concisa.
//Exemplo de uso do operador de comparação de spaceship:*/ 
$a = 5;
$b = 10;
echo $a <=> $b; // exibe -1, porque $a é menor que $b
$c = 15;
$d = 10;
echo $c <=> $d; // exibe 1, porque $c é maior que Sd 
$e = 20; 
$f = 20;
echo $e <=> $f; // exibe 0, porque $e é igual a $f 
echo "<br>";


echo "<h1>Operadores Lógicos 2 </h1>";
$d = NULL;
$f = NULL;
$g = 3;
echo $d ?? $f ?? $g;
//pula o NULL e vai para o 3 - novo recurso do php 7
echo "<br>";
//incremento e decremento
$a = 10;
echo $a++; 
echo "<br>";
echo $a++; 
echo "<br>";
echo $a--; 
echo "<br>";
echo $a--; 
echo "<br>";
echo --$a;
echo "<br>";
echo ++$a; 
echo "<br>";
$resultado = (10 + 3)/2;
echo $resultado;
echo "<br>";
?>

</body>
</html>