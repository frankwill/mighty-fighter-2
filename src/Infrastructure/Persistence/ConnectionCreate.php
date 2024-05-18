<?php 

namespace frankwsb\mf2\Infrastructure\Persistence;

use PDO;

class ConnectionCreate
{

  public static function createConnection(): PDO
  {
    $host = 'roundhouse.proxy.rlwy.net:53679';
    $root = 'root';
    $password = 'YQAdqPUSZzfwlqGZQrfNQUmLEXPcKKpC';
    $pdo = new PDO("mysql:host=$host;dbname=railway", $root, $password);

    return $pdo;
  }
}