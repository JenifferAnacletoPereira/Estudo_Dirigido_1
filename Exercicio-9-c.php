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

$metros_quadrados *= 1.1;

$quantidade_lata=(int)($metros_quadrados/$lata_rendimento);
$faltou=$metros_quadrados % $lata_rendimento;
$quantidade_galao=ceil($faltou/$galao_rendimento);
$preco_lata=$quantidade_lata*80;
$preço_galao=$quantidade_galao*25;
$preço_total=$preco_lata+$preço_galao;


Print"Será necessario $quantidade_lata latas e $quantidade_galao galões, e o preço será igual a RS $preço_total.";
