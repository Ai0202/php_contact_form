<?php
ini_set('error_reporting', E_ALL);

$host = "db";
$dbname = "contact_form";
$charset = "utf8mb4";
$user = 'root';
$password = '';
$options = [
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
PDO::ATTR_EMULATE_PREPARES => false,
];

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
try {
$dbh = new PDO($dsn, $user, $password, $options);
} catch (\PDOException $e) {
var_dump($e->getMessage());
exit;
}