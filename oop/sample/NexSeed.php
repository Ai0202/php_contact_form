<?php

/**
 * あるクラスのプロパティが、
 * 別のあるクラスのインスタンス
 */

require_once('Teacher.php');

class NexSeed
{
    public $staff = [];

    public function hire($name)
    {
        $this->staff[] = new Teacher($name);
    }
}