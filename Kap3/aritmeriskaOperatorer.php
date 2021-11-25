<?php

$a=$b=5;
$a=$b+5;
echo "\$a=$a, \$b=$b<br>"; //$a=10

$b=$a-1;
echo "\$a=$a, \$b=$b<br>"; //$a=10, $b=9

$c-$a/$b;
echo "\$a=$a, \$b=$b, \$c=$c<br>"; //$a=10, $b=9, $c=1.111111.....

$c=$a%b;
echo "\$a=$a, \$b=$b, \$c=$c<br>"; //$a=10, $b=9, $c=1

echo "<br>";

$a+=6;
$b-=2;
echo "\$a=$a, \$b=$b, \$c=$c<br>"; //$a=17, $b=17, $c=17

$c=++$a;
echo "\$a=$a, \$b=$b, \$c=$c<br>"; //$a=16, $b=7

$b=$a++;
$c=++$a;
echo "\$a=$a, \$b=$b, \$c=$c<br>"; //$a=19, $b=17, $c=19

?>