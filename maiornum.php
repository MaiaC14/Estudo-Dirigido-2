<?php

print "Informe um número: \n";
$N1 = (int) fgets (STDIN);

print "Informe outro numéro: \n";
$N2 = (int) fgets (STDIN);

if ($N1 > $N2) { print "O maior numéro é $N1. \n" };
elseif ($N1 < $N2) { print "O maior numéro é $N2. \n" };
else ($N1 == $N2) { print "Os números são iguais. \n" };