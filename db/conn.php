<?php
    $host = 'ec2-52-200-215-149.compute-1.amazonaws.com';
    $port = '5432';
    $db = 'd1tr1n3ekn8mdu';
    $user = 'swuniiavovtunb';
    $pass = '231f83fcf439fbd4ecc3cd71558f9b4151ab54ef560e79cb5dd24cc5d168c6f1';
    $charset = 'utf8mb4';

    $dsn = "pgsql:host=$host;port=$port;dbname=$db";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
    $crud = new crud($pdo);

?>