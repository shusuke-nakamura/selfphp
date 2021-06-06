<?php require_once './Encode.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>チェックボックス</title>
</head>

<body>
    選択されたのは、<?=e(implode(',', $_POST['arch']))?>
</body>

</html>