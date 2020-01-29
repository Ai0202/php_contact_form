<?php

echo '<pre>';
// POST送信されたデータが連想配列形式で入っている
var_dump($_POST);

// 送信元のname属性がemailのためkeyにはemailを指定
var_dump($_POST['email']);

// POST送信なのでGETは空
var_dump($_GET);