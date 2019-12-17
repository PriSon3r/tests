<?php

$n = 7; //размер стороны квадрата
$currentRow = 0;
while($currentRow < $n) 
{ 
    $rhombus = str_repeat('2', $currentRow > $n / 2 ? ($n - $currentRow - 1) * 2 + 1 : 2 * $currentRow + 1);
    $rhombusSquared = str_pad($rhombus, $n, '0', STR_PAD_BOTH) . '<br>';
    echo $rhombusSquared;
    $currentRow++;
}

?>