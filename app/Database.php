<?php

namespace App\Main;


use PDO;
use Throwable;

class Database
{

    public function __construct()
    {
        try{
            $host = 'db';
            $db   = 'mydb';
            $user = 'user';
            $pass = 'test';
            $charset = 'utf8mb4';

            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
            $opt = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $pdo = new PDO($dsn, $user, $pass, $opt);

        }catch (Throwable $e){
            echo 'PDO Conn err: '.$e->getMessage();
        }

    }
}