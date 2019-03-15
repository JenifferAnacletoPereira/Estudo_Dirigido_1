<?php

print"Escolha uma quantidade de dias:";
$dias= fgets (STDIN);

Print "Escolha uma quantidades de horas:";
$horas= fgets (STDIN);

Print "Escolha uma quantidade de minutos:";
$minutos= fgets (STDIN);

Print"Escolha uma quantidade de segundos:";
$segundos= fgets (STDIN);

$total_horas=$dias*24+$horas;
$total_minutos=$total_horas*60+$minutos;
$total_segundos=$total_minutos*60+$segundos;

Print"O total em segundos é $total_segundos";







