<?php

// クラスの作成
// class クラス名 {}

require_once('Human.php');
require_once('TalkativeInterface.php');
require_once('Running.php');

// class名 implements インターフェース名
// PHPは多重継承ができない(親のクラスは1つだけ)
class Student extends Human implements TalkativeInterface
{
    // traitの呼び出し
    use Running;
    
    // メソッド(振る舞い)
    public function study($hour)
    {
        return $hour . '時間勉強しました';
    }

    public function talk()
    {
        echo '話す';
    }
}