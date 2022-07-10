<?php
require 'config.php';

$nome = filter_input(INPUT_POST,'nome');
$email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL); //validação do email


if($nome && $email){

    $sql = $pdo->prepare("SELECT * FROM usuario WHERE email = :email");
    $sql->bindValue(':email',$email);
    $sql->execute();
    //verificar se não há um email igual
    if($sql->rowCount() === 0){
        //inserir valores
        $sql = $pdo->prepare("INSERT INTO usuario(nome, email) VALUES (:nome, :email)");
        $sql->bindValue(':nome',$nome);
        $sql->bindValue(':email',$email);
        $sql->execute();

    //retornar para a pagina principal/index
    header("location: index.php"); 
    exit;
    }else{
        header("location: cadastrar.php");
    }
    
}else{
    //caso não insira os valores, acaba voltando para cá
    header("location: cadastrar.php");
    exit;
}

?>

