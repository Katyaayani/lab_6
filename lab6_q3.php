<?php
function calculateArea($width1, $width2) {
    $area = $width1 * $width2;
    return $area;
}

$width1 = 4; 
$width2 = 2;   
$area = calculateArea($width1, $width2);

echo "<b>The area of the rectangle with width of $width1 and $width2 is $area</b>";
?>