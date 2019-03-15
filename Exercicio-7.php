<?php

Print"Indique o km percorrido:";
$quilometragem= fgets (STDIN);

Print"Por quantos dias o carro foi alugado:";
$dias= fgets (STDIN);

$total_pagar_dia=$dias*60;
$total_pagar_km=$quilometragem*0.15;
$total_a_pagar=$total_pagar_dia+$total_pagar_km;

Print"O valor total é de RS $total_a_pagar";
