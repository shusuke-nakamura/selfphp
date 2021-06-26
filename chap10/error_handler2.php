<?php
function hoge(int $x)
{
}

try {
    hoge('xxx');
} catch (Exception $e) {
    print "例外：{$e->getMessage()}";
} catch (Error $e) {
    print "エラー：{$e->getMessage()}";
}
