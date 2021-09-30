<?php
require_once 'connx.php';
$cidade = $_GET['cidade'];
$estado = $_GET['estado'];
$id = $_GET['id'];
$cep = $_GET['cep'];
$db = "update cidades set cidade=:cidade, estado=:estado, cep=:cep where id ='$id'";
$result = $sql -> prepare($db);
$result -> bindValue(':cidade', $cidade);
$result -> bindValue(':estado', $estado);
$result -> bindValue(':cep', $cep);
$result -> execute();
header('Location: index.php');

?>