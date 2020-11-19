<?php
$host = 'localhost:3307';
$dbname = 'quangcasestudy';
$user = 'root';
$password = 'Quang00210496';

$dns = 'mysql:host=' . $host . ';dbname=' . $dbname;
try {
    $pdo = new PDO($dns, $user, $password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (Exception $e) {
    echo $e->getMessage();
}
?>