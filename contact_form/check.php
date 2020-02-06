<?php
    // 入力の内容の受け取り
    // 入力内容の表示


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header('Location: index.php');
}

// 他のファイルを読み込む
require_once('function.php');

// $_POST
// post送信されたデータを格納する

// var_dumpは()の中の変数etcを表示する関数
// dieはそこで処理をとめる関数
// die === exit
// echo '<pre>';
// var_dump($_POST);die;

// 変数に送信された内容を代入
// $_POSTのkeyは、送信元のinputのname属性で決まる
$nickname = $_POST['nickname'];
$email = $_POST['email'];
$content = $_POST['content'];

// 入力内容のチェック
// 入力内容が空だったら
if ($nickname == '') {
    // 変数に文字を代入
    $nickname_result = 'ニックネームが入力されていません。';
} else {
    $nickname_result = 'ようこそ、' . $nickname . '様';
}

if ($email == '') {
    $email_result = 'メールアドレスが入力されていません。';
} else {
    $email_result = 'メールアドレス：' . $email;
}

if ($content == '') {
    $content_result =  'お問い合わせ内容が入力されていません。';
} else {
    $content_result = 'お問い合わせ内容：' . $content;
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <title>入力内容確認</title>
    <meta charset="utf-8">
</head>

<body>
    <h1>入力内容確認</h1>
    <!-- 画面に表示 -->
    <p><?php echo h($nickname_result); ?></p>
    <p><?php echo h($email_result); ?></p>
    <p><?php echo h($content_result); ?></p>

    <form method="POST" action="thanks.php">
        <input type="hidden" name="nickname" value="<?php echo h($nickname); ?>">
        <input type="hidden" name="email" value="<?php echo h($email); ?>">
        <input type="hidden" name="content" value="<?php echo h($content); ?>">
        <button type="button" onclick="history.back()">戻る</button>
        <?php if ($nickname != '' && $email != '' && $content != '') : ?>
            <button type="submit">OK</button>
        <?php endif; ?>
    </form>
</body>

</html>