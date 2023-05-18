<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'bsit-201_llanda_chatroom';
try {
    $dsn = 'mysql:host='.$host.';dbname='.$dbname;
    $pdo = new PDO($dsn, $user, $pass);
    //echo '<h1>DATABASE CONNECTED</h1>';
} catch (PDOException $e) {
    $e->getMessage();
}
?>