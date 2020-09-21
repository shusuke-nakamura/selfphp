<?php
function getDb() {
  $dsn = 'mysql:dbname=selfphp; host=127.0.0.1; charset=utf8';
  $usr = 'selfusr';
  $passwd = 'selfpass';
  // データベースへの接続
  $db = new PDO($dsn, $usr, $passwd);

  return $db;
}