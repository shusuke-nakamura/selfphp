<?php
$dt = new DateTime(null, new DateTimeZone('Asia/Ulan_Bator'));
print $dt->format('Y年m月d日 H時i分');
$dt2 = new DateTime(null, new DateTimeZone('America/Virgin'));
print $dt2->format('Y年m月d日 H時i分');
$dt3 = new DateTime(null, new DateTimeZone('Europe/London'));
print $dt3->format('Y年m月d日 H時i分');