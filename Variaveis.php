<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
//Variaveis de número e texto
$idade = 18;
$nome = "Maria";
echo "<h1>Idade: " . $idade . "</h1><br>"; 

echo "Nome: " . $nome;
// operador ternário
$status = ($idade >= 18) ? "Maior de idade" : "Menor de idade";
echo  "<br> <h2>" . $status . "</h2>" ;


// Definindo duas variaveis booleanas 
$temConta = true;
$possuiCartao = false; 

echo "Tem conta: " . ($temConta ? "Sim " : "não " . "<br>");

echo "<br>Possui cartão? " . ($possuiCartao ? "Sim" : "Não");

//Array
$cores = array("vermelho" ,"verde", "azul");
$numeros = [1, 2, 3, 4, 5];

$posicao = 1;
echo "<br>Posição" . $posicao . "<br/";
echo "Cor na posição" . $posicao . ": " . $cores[$posicao];
?>

</body>
</html>

