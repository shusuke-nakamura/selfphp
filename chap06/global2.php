<?php
$x = 10;

function checkScope(): int
{
    global $x;
    unset($x);
    return ++$x;
}

print checkScope();
print $x;