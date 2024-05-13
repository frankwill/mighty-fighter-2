<?php 

$dbPath = __DIR__ . "/banco.sqlite";
$pdo = new PDO("sqlite:$dbPath");

$pdo->exec("UPDATE        changelog 
            SET           description = 'Corrigido bugs de colisão; Barrinha de vida dos personagens implementada.'  
            WHERE id = 2"
          );

          