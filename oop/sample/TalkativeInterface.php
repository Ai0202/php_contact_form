<?php

// interface インターフェース名 {}
// 作れるのはpublicなプロパティとメソッドのみ
// 処理内容はかけない
// クラスに実装する
// 実装されたクラスはインターフェースに書いてある
// メソッドとプロパティを実装しないといけなくなる
interface TalkativeInterface
{
    public function talk();
}