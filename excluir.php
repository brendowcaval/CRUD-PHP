<?php
require 'config.php';

$id = filter_input(INPUT_GET, 'id');

//se tiver id, delete
if($id){
    $sql = $pdo->prepare("DELETE FROM usuario WHERE id = :id");
    $sql->bindValue(':id',$id);
    $sql->execute();
}

// se excluiu, volte aqui
header("Location: index.php");

?>