<?php
function checkScope(): int
{
    $x = 0;
    return ++$x;
}

print checkScope();
print checkScope();