<?php 

$dbPath = __DIR__ . "/../banco.sqlite";
$pdo = new PDO("sqlite:$dbPath");

$pdo->exec("CREATE TABLE IF NOT EXISTS changelog (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  title TEXT,
  date TEXT,
  description TEXT
);");