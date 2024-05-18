<?php

use frankwsb\mf2\Infrastructure\Persistence\ConnectionCreate;
$pdo = ConnectionCreate::createConnection();

$pdo->exec("DELETE FROM changelog WHERE id = 2");



          