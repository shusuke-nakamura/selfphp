<?PHP
if (!preg_match('/^\w+([-+.\']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/i', $_POST['from'])) {
    die('不正なメールアドレスです。');
}

mb_send_mail('wings@exmaple.com', $_POST['subject'], $_POST['body'], "From: {$_POST['from']}");
print 'メールが送信されました。';
