<?php
require 'config.php';

$usuario = [];
//buscando o dado do id
$id = filter_input(INPUT_GET, 'id');

//se tiver o id, ele irá fazer a consultar no banco
if($id){
    $sql = $pdo->prepare("SELECT * FROM usuario WHERE id = :id");
    $sql->bindValue(':id',$id);
    $sql->execute();

    if($sql->rowCount() > 0){
        $usuario = $sql->fetch(PDO::FETCH_ASSOC);
    }else{
        //caso não tenha o id
        header("location: index.php");
        exit;
    }
}else{
    header("location: index.php");
}

?>

<html>
    <head>
        <title>
            CRUD - Editar
        </title>
        <style>
            div {
           margin: auto;
           width: 70%;
           border: 3px solid;
           padding: 40px;
           border-style: ridge;
        }
        .center {
           text-align: center;
           font-size: 40px;
        }
        .button {
           background-color: #0000FF;
           border: none;
           color: white;
           padding: 15px 32px;
           text-align: center;
           text-decoration: none;
           display: inline-block;
           font-size: 16px;
           margin: 4px 50px;
           cursor: pointer;

        }
        label {
            margin: 4px 50px;
        }

        </style>
    </head>
    <body>
        
    
<h1 class="center">Editar usuário</h1>
<div>
<form method="POST" action="editar_action.php">
    <input type="hidden" name="id" value="<?=$usuario['id'];?>"/>
    <label>
        Nome: <input type="text" name="nome" value="<?=$usuario['nome'];?>"/>
    </label>
    <label>
        Email: <input type="text" name="email" value="<?=$usuario['email'];?>"/>   
    </label> 
    <input type="submit" value="Atualizar" class="button"/>
</form>
</div>

</body>


</html>



