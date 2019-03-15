<?php

Print"Quantos anos você fuma:";
$anos_fumados= fgets (STDIN);

Print"Quantos cigarros por dia você fuma:";
$cigarros_por_dia= fgets (STDIN);

$cigarros_fumados=$cigarros_por_dia*365*$anos_fumados;

$minutos_perdidos=$cigarros_fumados*10;

$horas_perdidas=$minutos_perdidos/60;

$dias_perdidos= round ($horas_perdidas/24);

Print"Você perdeu $dias_perdidos dias de vida";

