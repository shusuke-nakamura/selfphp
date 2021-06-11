<?php require_once './Encode.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>クッキー情報</title>
</head>

<body>
    <form action="session2.php" method="post">
        <label for="email">メールアドレス：</label>
        <input type="text" name="email" id="email" size="40" value="<?=e($_SESSION['email'] ?? '')?>">
        <input type="submit" value="送信">
    </form>
</body>

</html>