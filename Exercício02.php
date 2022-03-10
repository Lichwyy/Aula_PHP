<?php
$a = 10;
$b = 4;
$c = ($a+$b)/2;
$d = ($c%2 == 0) ? $c*3 : $c**2;
echo "A sua média é: $c";
echo "<br/>
Se a sua média foi par, a sua média foi multiplicada por 3, se ela foi impar ela foi elevada ao quadrado: $d";
  ?>