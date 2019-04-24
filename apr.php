<?php

print "Informe a primeira nota do aluno: \n";
$N1 = (float) fgets(STDIN);

print "Informe a segunda nota do aluno: \n";
$N2 = (float) fgets(STDIN);

$media = $N1 + $N2 /2;

if ($media => 7) { print "O aluno foi aprovado. \n"};
elseif ($média < 7) {print "O aluno foi reprovado. \n"};
else ($media == 10) { print "O aluno foi aprovado com distinção. \n"};
