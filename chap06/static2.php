<?php
function checkScope(): int
{
    static $x = 0;
    return ++$x;
}

print checkScope();
print checkScope();