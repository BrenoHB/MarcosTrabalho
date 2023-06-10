<?php
require_once(__DIR__ . '/../config/conn.php');


$sql = $pdo->prepare("SELECT * FROM filme;");
$result = $sql->execute();

if ($result) {
    $filmes = $sql->fetchAll(PDO::FETCH_ASSOC);
} else {
   
    $filmes = array();
}

?>