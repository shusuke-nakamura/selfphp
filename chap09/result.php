<?php
require_once '../DbManager.php';
require_once '../Encode.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>結果セット</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>ISBNコード</th>
            <th>書名</th>
            <th>価格</th>
            <th>出版社</th>
            <th>刊行日</th>
        </tr>
        <?php
try {
    $db = getDb();
    $stt = $db->prepare('SELECT * FROM book ORDER BY published DESC');
    $stt->execute();
    while ($row = $stt->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <tr>
            <td>
                <?=e($row['isbn']) ?>
            </td>
            <td>
                <?=e($row['title']) ?>
            </td>
            <td>
                <?=e($row['price']) ?>円
            </td>
            <td>
                <?=e($row['publish']) ?>
            </td>
            <td>
                <?=e($row['published']) ?>
            </td>
        </tr>
        <?php
    }
} catch (PDOException $e) {
    print "エラーメッセージ：{$e->getMessage()}";
}
?>
    </table>
</body>

</html>