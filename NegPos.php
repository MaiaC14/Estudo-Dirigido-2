<?php

print "Informe um número:";
$N = (int) fgets (STDIN);

if ($N > 0) { print "O número informado é positivo."};
elseif ($N < 0) { print "O número informado é negativo."};
else ($N == 0) { print "O número informado é neutro (nulo)."};
