<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>フォームのサンプル</title>
</head>

<body>
    <h2>POST送信のフォーム</h2>
    <form action="post.php" method="post">
        <input type="text" name="email">
        <input type="password" name="pass">
        <button type="submit">送信</button>
    </form>

    <h2>GET送信のフォーム</h2>
    <form action="get.php" method="get">
        <input type="text" name="address">
        <input type="date" name="date">
        <button type="submit">送信</button>
    </form>
</body>

</html>