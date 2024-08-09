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
echo "<h1>Coersão</h1>";
$php = "5"; // $php é uma string com valor "5"
echo $php;
echo "<br/>";
echo "<br/>";
$php = $php + 5; // $php é convertido para inteiro e somado com 5, resultando em 10 echo $php;
echo $php;
echo "<br/>";
$php = $php + 5.7; // $php é convertido para float e somado com 5.7, resultando em 10.7 echo Sphp;
echo $php;
echo "<br/>";
echo "<br/>";
$php = 4 + 3.5; // $php é uma operação aritmética, resultando em 7.5 echo $php:
echo $php;
echo"<br/>";
echo  $php = 4 + "12.5"; // 0 string 12.5 é convertido para float e somado com 4, resultando em 16.5
echo $php;
echo "<br/>";
echo "<br/>";
$php = 5 + "10testes"; // O string "10testes" é convertido para inteiro, resultando em 15
echo $php;
echo "<br/>";
echo "<br/>";

// Typecast
echo "<h1>Typecast</h1>";
$php = 8; // $php é um inteiro echo $php; 
echo "<br/>"; 
echo "<br/>";
$php = (double) $php; // $php é convertido para float, resultando em 8.0 
echo $php;
echo "<br/>";
echo "<br/>";
$php = 1.5; // $php é um float 
echo $php;
echo "<br/>";
// settype
$php = 9; // $php é um inteiro var_dump ($php);
echo "<br/>"; 
echo "<br/>";
settype($php, "double");// $php é convertido para float, resultando em 9.0 
var_dump ($php);
echo "<br/>";
echo "<br/>";
?>
</body>
</html>