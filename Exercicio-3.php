<?php
 print'Indique o valor do salário:';
$salario= fgets (STDIN);

print'Indique a porcentagem do aumento:';
$porcentagem=fgets (STDIN);

$calculo_porcentagem=($salario*$porcentagem)/100;
$novosalario=$salario+$calculo_porcentagem;

Print "O valor do aumento é de $calculo_porcentagem, totalizando $novosalario";