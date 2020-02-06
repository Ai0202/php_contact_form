<?php

/**
 * DBを操作するときにやること
 * ①DBに接続する
 * ②SQLの実行
 * 
 * 問い合わせ内容をDBに保存する
 *      1. データの受け取り
 *      2. DBに保存する
 *          1. DBに接続
 *          2. SQLを実行
 * 問い合わせ内容を画面に表示する
 */

    // 問い合わせ内容をDBに保存する
    // 1. データの受け取り
    // 2. DBに保存する
    // 問い合わせ内容を画面に表示する


    // もしリクエストがGETだった場合、
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        // index.phpにリダイレクト
        header('Location: index.php');
        exit;
    }

    // ファイルの読み込み
    require_once('function.php');
    require_once('dbconnect.php');

    // データの受け取り
    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $content = $_POST['content'];

    //SQLを実行(データの保存)
    $stmt = $dbh->prepare('INSERT INTO surveys (nickname, email, content) VALUES (?, ?, ?)');
    $stmt->execute([$nickname, $email, $content]);//?を変数に置き換えてSQLを実行
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>送信完了</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>お問い合わせありがとうございました！</h1>
    <p><?php echo h($nickname); ?></p>
    <p><?php echo h($email); ?></p>
    <p><?php echo h($content); ?></p>
</body>
</html>