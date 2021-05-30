<?php
function getTriangleArea(float $base = 5, float $heigh = 1): float
{
    return $base * $heigh / 2;
}

$area = getTriangleArea();
print "三角形の面積は{$area}です。<br />";
$area = getTriangleArea(10);
print "三角形の面積は{$area}です。<br />";
$area = getTriangleArea(10, 5);
print "三角形の面積は{$area}です。";