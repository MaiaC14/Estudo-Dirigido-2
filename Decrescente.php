<?php

print "Informe três números diferentes entre si.";

print "Primeiro número:";
$N1 = (int) fgets (STDIN);

print "Segundo número:";
$N2 = (int) fgets (STDIN);

print "Terceiro número:";
$N3 = (int) fgets (STDIN);

if ($N1 > $N2 and $N2 > $N3) { print "$N1 " . "$N2" . "$N3 \n" };
elseif ($N1 > $N3 and $N3 > $N2) { print "$N1" . "$N3" . "$N2 \n" };
elseif ($N2 > $N1 and $N1 > $N3) { print "$N2" . "$N1" . "$N3 \n" };
elseif ($N2 > $N3 and $N3 > $N1) { print "$N2" . "$N3" . "$N1 \n" };
elseif ($N3 > $N1 and $N1 > $N2) { print "$N3" . "$N1" . "$N2 \n" };
elseif ($N3 > $N2 and $N2 > $N1) { print "$N3" . "$N2" . "$N1 \n" };
