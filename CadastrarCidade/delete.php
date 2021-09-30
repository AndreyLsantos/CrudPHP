<?php
require_once 'connx.php';
$id = $_GET['id'];
$db = "delete from cidades where id='$id'";
$result = $sql -> prepare($db);
$result ->execute();
header('Location: index.php');
?>