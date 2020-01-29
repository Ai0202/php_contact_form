<?php

echo '<pre>';
// GET送信されたデータが連想配列形式で入っている
var_dump($_GET);

// 送信元のname属性がaddressのためkeyにはaddressを指定
var_dump($_GET['address']);

// GET送信なのでPOSTは空
var_dump($_POST);
