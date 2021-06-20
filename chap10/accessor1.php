<?php
require_once 'TriangleFigure.php';

$tri = new TriangleFigure();
$tri->base = -10;
$tri->height = 'HenoHeno';

print "三角形の面積：{$tri->getArea()}";