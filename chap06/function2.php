<?php
function getTriangleArea(float $base, float $heigh): float
{
    return $base * $heigh / 2;
}

$area = $base * $heigh / 2;
print "三角形の面積は{$area}です。";