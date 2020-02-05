<?php

require_once('Store.php');

// Q8
class Restaurant extends Store
{
    // Q10
    public function sell($item)
    {
        echo $item . 'をサーブしました';
    }

}