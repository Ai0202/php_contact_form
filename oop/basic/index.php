<?php

// require_once('Store.php');
require_once('Restaurant.php');
require_once('Employer.php');

// Q4
// $store = new Store();

// Q5
// $store->name = '三ツ矢堂製麺';

// Q7 ②
$store = new Store('三ツ矢堂製麺');

// Q6
$store->sell('つけ麺');


// Q9
$restaurant = new Restaurant('ポータル');

// Q14
// $employer = new Employer();

// Q20 ②
$employer = new Employer(10000);

// Q15
$employer->startBusiness('タピオカ屋さん');

// Q16
var_dump($employer->store);

// Q18
$employer->store->sell('抹茶タピオカ');

// Q25
$employer->payTax();

// Q29
$employer->talk();