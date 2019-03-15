<?php

Print "Digite o valor da mercadoria:";
$valor_mercadoria= fgets (STDIN);

Print "Digite o percentual de desconto:";
$percentual_desconto= fgets (STDIN);

$valor_desconto=($valor_mercadoria*$percentual_desconto)/100;

$novo_valor_mercadoria=$valor_mercadoria-$valor_desconto;

Print"O desconto foi de RS $valor_desconto, sua mercadoria ficou RS $novo_valor_mercadoria.";
