<?php

// Q1
class Store
{
    // Q2
    public $name;

    // Q7 ①
    public function __construct($name)
    {
        $this->name = $name;
    }

    // Q3
    public function sell($item)
    {
        echo $item . 'を売りました';
    }

}