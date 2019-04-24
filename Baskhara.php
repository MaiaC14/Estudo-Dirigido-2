<?php

print "Informe o valor de A:";
$a = fgets (STDIN);
if ($a == 0) { print "A variável A não pode ser um número nulo (0)!\n"};

print "Informe o valor de B:";
$b = fgets (STDIN);

print "Informe o valor de C:";
$c = fgets (STDIN);

$Delta = (pow($b,2))-(4*$a$c);

if ($Delta < 0) { print "O Delta é negativo, não há raízes reais para esse número."};

elseif ($Delta == 0) { $X = -$b/2*$a;
                       print "O valor de A é: $a \n";
                       print "O valor de B é: $b \n";
                       print "O valor de C é: $c \n";
                       print "O valor de Δ é: $Delta \n";
                       print "O valor de x é: $X \n";}

elseif ($Delta > 0) { $X1 = (-$b-sqrt($Delta))/2*$a;
                      $X1 = (-$b-sqrt($Delta))/2*$a;
                      print "O valor de A é: $a \n";
                      print "O valor de B é: $b \n";
                      print "O valor de C é: $c \n";
                      print "O valor de Δ é: $Delta \n";
                      print "O valor de x1 é: $X1 \n";
                      print "O valor de x2 é: $X2 \n";}
                                       
