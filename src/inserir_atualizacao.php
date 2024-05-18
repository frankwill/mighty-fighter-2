<?php
require_once dirname(__FILE__) . '/../vendor/autoload.php';
use frankwsb\mf2\Infrastructure\Persistence\ConnectionCreate;
$pdo = ConnectionCreate::createConnection();

$titulo = filter_input(INPUT_POST, "titulo");
$data = filter_input(INPUT_POST, "data");
$descricao = filter_input(INPUT_POST, "descricao");

$sql = "INSERT INTO changelog (title, date, description) VALUES (:title, :date, :description)";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":title", $titulo);
$stmt->bindValue(":date", $data);
$stmt->bindValue(":description", $descricao);
$stmt->execute();

header("Location: /");



