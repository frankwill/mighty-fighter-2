<?php 

$dbPath = __DIR__ . "/../banco.sqlite";
$pdo = new PDO("sqlite:$dbPath");

$pdo->exec("INSERT INTO changelog (
                                    title,
                                    date,
                                    description
                                  ) 
            VALUES                (
                                    'Notas do patch - Atualização v01.1',
                                    '2024-04-01',
                                    '
                                      Adicionados 2 novos personagens jogáveis: C. Tonaldo e Aren;
                                      Ajustes de balanceamento nos ataques especiais de todos os personagens para uma experiência de jogo mais equilibrada;
                                      Corrigidos diversos bugs, incluindo problemas de colisão de sprites e falhas de ataques;
                                      Aprimoramentos de desempenho para garantir uma jogabilidade mais fluida.
                                    '
                                  );
");