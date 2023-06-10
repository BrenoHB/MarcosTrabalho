<?php
require_once(__DIR__ . '/../config/conn.php');


$sql = $pdo->prepare("SELECT * FROM user;");
$result = $sql->execute();

if ($result) {
    $users = $sql->fetchAll(PDO::FETCH_ASSOC);
} else {
   
    $users = array();
}

?>