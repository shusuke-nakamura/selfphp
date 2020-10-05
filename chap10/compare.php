<?php
require_once 'Person.php';

$p1 = new Person('リオ', '掛谷');

$p2 = $p1;
var_dump($p1 == $p2);
var_dump($p1 === $p2);

$p3 = clone $p1;
var_dump($p1 == $p3);
var_dump($p1 === $p3);