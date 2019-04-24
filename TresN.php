<?php

print "Informe um número:\n";
$N1 = (int) fgets(STDIN);

print "Informe outro número: \n";
$N2 = (int) fgets(STDIN);

print "Informe um terceiro número:\n";
$N3 = (int) fgets(STDIN);

if ($N1 > $N2 and $N1 > $N3) { print "O primeiro número informado, $N1, é maior que os demais.\n"};
elseif ($N2 > $N1 and $N2 > $N3) { print "O segundo número informado, $N2, é maior que os demais.\n"};
elseif ($N3 > $N1 and $N3 > $N2) { print "O terceiro número informado, $N3, é o maior que os demais.\n"};
else ($N1 == $N2 and $N1 == $N3) { print "Todos os números são iguais."};
