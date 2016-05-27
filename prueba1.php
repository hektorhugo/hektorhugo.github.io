<?php
$a = array(
    1 => 2,
    2 => 3,
    3 => 1,
    4 => 5,
    5 => 7,
    6 => 6,
    7 => 21,
    8 => 7,
    9 => 11,
    10 => 9,
    11 => 0,
    12 => 2);


/*Sume el número que está en la casilla 3 al número que esta en la
casilla 11 y ponga el total en la casilla 11.*/
$a[11] = $a[3] + $a[11];
/*Sume el número que esta en la casilla 1 al número que está en la
casilla cuyo número está en la casilla 9 y ponga el total en la casilla5.*/
$a [5] = $a[1] + $a[$a[9]]
while(true){
  /*Multiplique el número que está en la casilla 12 por el número que
  está en la casilla 12 y ponga el producto en la casilla 12.*/
  $a[12] = $a[12] * $a[12];
  /*Es el número que está en la casilla 5 igual al número que está en la
  casilla 10?*/
  if($a[5] == $a[10]){
    $a[8] = $a[5] - $a[7];
    $a[6] = $a[12] - $a[8];
    break;
  }else{
    $a[12] = $a[12] - 2;
    $a[5] = $a[5] + $a[2]
  }
  echo $a;

}







/*a) ¿Qué número está en la casilla 6?*/

?>
