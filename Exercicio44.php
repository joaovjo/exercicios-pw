<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     /*44 - Escreva um algoritmo para ler 2 valores e se o segundo valor
     informado for ZERO, deve ser lido um novo valor, ou seja,
     para o segundo valor não pode ser aceito o valor zero e imprimir
     o resultado da divisão do primeiro valor lido pelo segundo valor lido.*/

     $num1 = 44;
     $num2 = 0;
     $result = 0;

     do {
     echo "burro";
     return; 
     } while ($num2==0);
     
     $result = $num1 / $num2;
     echo"<p> O resultado da divisão é " . $result. "</p>";
    
    ?>
</body>
</html>