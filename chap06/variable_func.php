<?php
function getTriangleArea(float $base, float $heigh): float
{
    return $base * $heigh / 2;
}

$name = 'getTriangleArea';
$area = $name(8, 10);
print "三角形の面積は{$area}です。";