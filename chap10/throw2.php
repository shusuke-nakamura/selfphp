<?php
class UrlSyntaxException extends Exception {}
class UrlRequestException extends Exception {}

class MyUtil {
  public static function getContent(string $url): string {
    if (!preg_match('|http(s)?://([\w\-]+\.)+[\w\-]+(/[\w\- ./?%&=]*)?|', $url)) {
      throw new UrlSyntaxException('不正なURLの形式です。');
    }
    $data = @file_get_contents($url);

    if (!$data) {
      throw new UrlRequestException('指定されたURLが見つかりません。');
    }
    return $data;
  }
}

try {
  MyUtil::getContent('http://www.wings.msn.to/nothing/');
} catch (UrlSyntaxException $e) {
  print "警告:{$e->getMessage()}";
} catch (UrlRequestException　$e) {
  print "エラー:{$e->getMessage()}";
}