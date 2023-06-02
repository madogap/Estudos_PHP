<?php
/* 
M = C (C + i) ^ t
M = Montante a receber
C = Capital
i = Taxa de Juros
t = Tempo
*/
$capital_investido = 10000.00;
echo "Capital investido: " . number_format($capital_investido, 2, ",", ".") . "<br>";

$taxa_juro = 5 / 1000;

echo "Taxa de juros: $taxa_juro <br>";

$tempo = 12;
echo "Tempo: $tempo meses <br><br>";

$total_receber = $capital_investido * ((1 + $taxa_juro) ** $tempo);
echo "Total a receber: " . number_format($total_receber, 2, ",", ".") . "<br>";

echo"Total ganho em juros: " . number_format($total_receber - $capital_investido,2,",","."). "<br";

//O capital de 10.000,00 com uma taxa de juros composto de 0.50 ao mês, vão se tornar R$ 10.616,78 em 12 meses.
