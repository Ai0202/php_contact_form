<?php
ini_set('error_reporting', E_ALL);

// 定義されていない変数を使用してるためエラー
// Undefined variable: name
echo $name;

echo '<br>===================================<br><br>';

$students = ['Ikeda', 'Hirai'];
var_dump($students['0']); // Ikeda
var_dump($students['1']); // Hirai

// 存在しないためエラー
// Notice: Undefined offset: 2 
$students['2'];

echo '<br>===================================<br><br>';

$pref = ['Miyagi' => 'Sendai', 'Okinawa' => 'Naha'];
var_dump($pref['Miyagi']); // Sendai
var_dump($pref['Okinawa']); // Naha

// 存在しないためエラー
// Undefined index: Chiba
$pref['Chiba'];

echo '<br>===================================<br><br>';

// 定数
const TAX = 1.08;

var_dump(TAX);

// 定義していない定数を使用しているためエラー
// Use of undefined constant MONEY 
var_dump(MONEY);

echo '<br>===================================<br><br>';

// 定義していない関数を実行しているためエラー
// Fatal error: Uncaught Error: Call to undefined function doSomething() 
doSomething();

echo '<br>===================================<br><br>';
