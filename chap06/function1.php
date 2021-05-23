<?php
function getTriangleArea($base, $heigh)
{
    return $base * $heigh / 2;
}

$area = getTriangleArea(8, 10);
print "三角形の面積は{$area}です。";