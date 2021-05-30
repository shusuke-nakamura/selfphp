<?php
function getTriangleArea(float $base, float $heign): float
{
    return $base * $heign / 2;
}

print getTriangleArea(...[10, 5]);