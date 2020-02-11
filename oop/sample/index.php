<?php

require_once('Student.php');
require_once('Teacher.php');
require_once('NexSeed.php');

// インスタンス化
// Studentクラスをインスタンス化して、変数$studentに代入
$student = new Student();
var_dump($student); // Object(Student)

// プロパティにアクセス
// ->(アロー演算子)は「の」と思ってください
$student->name = 'Atsushi';
var_dump($student->name);

// メソッドにアクセス
var_dump($student->study(6));

// インスタンス化した時に__constructが実行される
$teacher = new Teacher('Kayamori');

// $teacher->name = 'Sasano';
var_dump($teacher->name);

// Teacherクラスのrequestメソッドを実行
var_dump($teacher->request(6));

// Teacherクラスのwalkメソッドを実行
// Teacherクラスにwalkがないのにエラーが出ないのは、
// walkメソッドを持ってるHumanクラスを継承してるから
$teacher->walk();

$student->run();

$nexseed = new NexSeed();

$nexseed->hire('Atsushi');

echo '<pre>';
var_dump($nexseed->staff);

$res = $nexseed->staff[0]->request();
var_dump($res);

/**
 * 関数のおさらい
 * ①定義する
 * ②実行する(呼び出す)
 * メソッドも クラスの中の *関数* なので使い方は *基本* 一緒
 */

// ①関数の定義
function funcName($arg)
{
    // 処理内容
    echo $arg . 'は引数';
    echo '<pre>';
}

// ②関数の実行
funcName('これが$argに代入される');
// 関数funcNameを実行してる
funcName('ここの文字');
funcName('100');
funcName('こんにちは');

$name = 123;
var_dump(555);die;
var_dump($name);die;

