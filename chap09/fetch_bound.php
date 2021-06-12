<?php
require_once '../DbManager.php';

try {
} catch (PDOException $e) {
    print "エラーメッセージ：{$e->getMassage()}";
}
