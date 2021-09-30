<?php
require_once 'connx.php';

$cidade = $_GET['cidade'];
$estado = $_GET['estado'];
$cep = $_GET['cep'];
    $db = "insert into cidades (cidade, estado, cep) values (:cidade, :estado, :cep)";
    $result = $sql->prepare($db);
    $result->bindValue(':cidade', $cidade);
    $result->bindValue(':estado', $estado);
    $result->bindValue(':cep', $cep);
    $result->execute();
    header('Location: index.php');

