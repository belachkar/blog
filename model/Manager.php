<?php

namespace Belachkar\Blog\Model;

use PDO;

class Manager {
  protected function dbConnect() {
    require 'env.php';

    // Connection params
    $db = 'mysql';
    $host = 'localhost';
    $dbName = 'ocr';
    $dsn = "{$db}:host={$host};dbname={$dbName}";
    $user = $dbUser['user'];
    $pass = $dbUser['pass'];
    $options = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    // Create instance connection to MySQL server
    $db = new \PDO($dsn, $user, $pass, $options);
    return $db;
  }
}
