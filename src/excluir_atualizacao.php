<?php 

require_once dirname(__FILE__) . '/../vendor/autoload.php';
use frankwsb\mf2\Infrastructure\Persistence\ConnectionCreate;
$pdo = ConnectionCreate::createConnection();

$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

$sql = "DELETE FROM changelog WHERE id = ?;";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(1, $id, PDO::PARAM_INT);
$stmt->execute();

header("Location: /");
?>