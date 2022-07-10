<?php

$db_name = 'crud';
$db_host = 'localhost:3306';
$db_user = 'root';
$db_password = '';
//configuração com o banco de dados
$pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user,$db_password);



?>

