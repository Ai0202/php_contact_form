<?php

// Q13 ②
require_once('Store.php');
require_once('EmployerInterface.php');
require_once('Talkative.php');

// Q11
class Employer implements EmployerInterface
{
    // Q28 
    use Talkative;

    // Q12
    // private $store;

    // Q17
    public $store;

    // Q19
    private $capital;

    // Q20 ①
    public function __construct($capital)
    {
        $this->capital = $capital;
    }

    // Q13 ①
    public function startBusiness($name)
    {
        $this->store = new Store($name);
    }

    // Q24
    public function payTax()
    {
        echo '税金の支払いをしました';
    }
}