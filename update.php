<?php 

$dbPath = __DIR__ . "/banco.sqlite";
$pdo = new PDO("sqlite:$dbPath");

// $description = "Adicionados 2 novos personagens jogáveis: C. Tonaldo e Aren;
// Ajustes de balanceamento nos ataques especiais de todos os personagens para uma experiência de jogo mais equilibrada;
// Corrigidos diversos bugs, incluindo problemas de colisão de sprites e falhas de ataques;
// Aprimoramentos de desempenho para garantir uma jogabilidade mais fluida.";

$pdo->exec("UPDATE        changelog 
            SET           date = '2024-05-15'  
            WHERE id = 3"
);



          