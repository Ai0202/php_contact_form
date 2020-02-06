<?php
    /**
     * DBに保存されている内容を一覧表示する
     * 1. DBからデータを取得
     *      1. DBに接続する
     *      2. SQLを実行する
     *      3. 取得したデータを変数に保存する
     * 2. 取得したデータを画面に表示する
     */

    require_once('function.php');
    require_once('dbconnect.php');

    //SQLを実行
    $stmt = $dbh->prepare('SELECT * FROM surveys');
    $stmt->execute();
    // SQLの実行結果を変数に代入
    $results = $stmt->fetchAll(); 

    // var_dump($results);die;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>一覧</title>
</head>
<body>
<!-- //画面に表示する -->
    <?php foreach ($results as $result): ?>
        <p><?php echo h($result['nickname']); ?></p>
        <p><?php echo h($result['email']); ?></p>
        <p><?php echo h($result['content']); ?></p>
    <?php endforeach; ?>
</body>
</html>