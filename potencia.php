<?php 

print "Informe a base:\n"
$B = fgets (STDIN);

print "Informe o expoente:\n";
$E = fgets (STDIN);

$Potencia = $B ** $E;

print "O resultado da potência é de: $potencia. \n";