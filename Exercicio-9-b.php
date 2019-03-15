<?php
 Print"Seja Bem vindo a loja de Tintas \n";

 Print"Quantos metros quadrado irá ser pintado:";
 $metros_quadrados= fgets(STDIN);

//lata
$lata_preço=80;
$lata_rendimento=108;

//galao
$galao_preço=25;
$galao_rendimento=21.6;

$quantidade_galao=ceil($metros_quadrados/$galao_rendimento);
$preço_total=$quantidade_galao*25;

Print"Será necessário $quantidade_galao latas de tinta, e o preço será igual a RS $preço_total";
