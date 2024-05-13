<?php 

$usuario = filter_input(INPUT_POST, "usuario");
$senha = filter_input(INPUT_POST, "senha");

if ($usuario === "admin" && $senha === "123") {
  session_start();
  $_SESSION['logado'] = true;

  header("Location: /");
} else {
  $_SESSION['logado'] = false;
  header("Location: /login");
}
