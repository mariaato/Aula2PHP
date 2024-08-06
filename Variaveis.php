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
//Variaveis de número e texto
$idade = 18;
$nome = "Maria";
echo "<h1>Idade:</h1> " . $idade . "<br>"; 

echo "<h1>Nome: </h1>" . $nome;
// operador ternário
echo "<h1>Operador ternário</h1>";
$status = ($idade >= 18) ? "Maior de idade" : "Menor de idade";
echo  "<h2>" . $status . "</h2>" ;


// Definindo duas variaveis booleanas 

echo "<h1>Boolean</h1>";
$temConta = true;
$possuiCartao = false; 

echo "Tem conta: " . ($temConta ? "Sim " : "não " . "<br>");

echo "<br>Possui cartão? " . ($possuiCartao ? "Sim" : "Não");

//Array
echo "<h1>Array</h1>";
$cores = array("vermelho" ,"verde", "azul");
$numeros = [1, 2, 3, 4, 5];

$posicao = 1;
echo "<br>Posição" . $posicao . "<br/";
echo "Cor na posição" . $posicao . ": " . $cores[$posicao];
?>

</body>
</html>

