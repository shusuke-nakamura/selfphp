<?php require_once './Encode.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>クッキー情報</title>
</head>

<body>
    <form action="cookie2.php" method="post">
        <label for="email">メールアドレス：</label>
        <input type="text" name="email" id="email" size="40" value="<?=e($_COOKIE['email'] ?? '')?>">
        <input type="submit" value="送信">
    </form>
</body>

</html>