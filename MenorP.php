<?php

print "Informe o primeiro preço:\n";
$P1 = fgets (STDIN);

print "Informe o segundo preço:\n";
$P2 = fgets (STDIN);

print "Informe o terceiro preço:\n";
$P3 = fgets (STDIN);

if ($P1 < $P2 and $P1 < $P3) { print "O primeiro produto possui o preço mais baixo, é preferível optar por ele.\n"};
elseif ($P2 < $P1 and $P2 < $P3) { print "O segundo produto possui o preço mais baixo, é preferível optar por ele.\n"};
elseif ($P3 < $P1 and $P1 < $P2) { print "O terceiro produto possui o preço mais baixo, é preferível optar por ele.\n"};
elseif ($P1 == $P2 and $P1 < $P3) { print "Tanto o primeiro quanto o segundo produto possuem o preço mais baixo, é preferível optar por um deles.\n"};
elseif ($P1 < $P2 and $P1 == $P3) { print "Tanto o primeiro quanto o terceiro produto possuem o preço mais baixo, é preferível optar por um deles.\n"};
elseif ($P1 < $P3 and $P2 == $P3) { print "Tanto o segundo quanto o terceiro produto possuem o preço mais baixo, é preferível optar por um deles.\n"};
elseif ($P1 == $P2 and $P1 == $P3) { print "Nenhum dos produtos informados possui o preço mais baixo que os demais.\n"};
