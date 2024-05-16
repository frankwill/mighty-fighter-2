<?php 

$dbPath = __DIR__ . "/../banco.sqlite";
$pdo = new PDO("sqlite:$dbPath");


$pdo->exec("DELETE FROM changelog WHERE id = 2");



          