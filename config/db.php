<?php
try{
    $host = '127.0.0.1';
    $db   = 'server1';
    $user = 'root';
    $pass = 'root';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $pdo = new PDO($dsn, $user, $pass, $opt);

    /*$conn = mysqli_connect('db', 'user', 'test', "mydb");

    if($conn){
        echo 'Connected';
    }*/
}catch (Throwable $e){
    echo 'PDO Conn err: '.$e->getMessage();
}
