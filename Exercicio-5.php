<?php

Print"Vamos viajar!! \n";

Print "Qual a distancia que irá percorrer (Km):";
$distancia= fgets (STDIN);

Print"Qual a velocidade média que irá usar (Km/Hr):";
$velocidade_media= fgets (STDIN);

$tempo=round ($distancia/$velocidade_media);

Print"O tempo que levará para chegar é de $tempo horas";

