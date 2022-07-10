<?php
require 'config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM usuario");
//verificar se há usuarios cadastrados no banco, se sim, então é >0
if($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}



?>

<html>
<head>
    <title>
        CRUD
    </title>
<style> /*  PARTE CSS */
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

.button {
  background-color: #FFA500; /* orange */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button2 {background-color: #f44336;} /* Red */
.button3 {background-color: #0000FF;} /* Blue */

.center {
  text-align: center;
  font-size: 40px;
}

div {
    margin: auto;
    width: 70%;
    border: 3px solid;
    padding: 70px;
    border-style: ridge;
}


tr:nth-child(even) {background-color: #f2f2f2;}
</style>
</head>
<body>


<h1 class="center"> Lista de Usuários</h1>

<div>
   <!--ir para o cadastramento-->
  <a href="cadastrar.php"><Button class="button button3"> Cadastrar Usuário </Button> </a>
  <Text><br><br></Text>
  
  <table style="border-collapse: collapse;">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    <?php foreach($lista as $usuario): ?>
     <tr>
            <td><?=$usuario['id'];?></td>
            <td><?=$usuario['nome'];?></td>
            <td><?=$usuario['email'];?></td>
            <td>
               <a href="editar.php?id=<?=$usuario['id'];?>"><Button class="button"> Editar </Button></a>
               <a href="excluir.php?id=<?=$usuario['id'];?>"><Button class="button button2"> Excluir </Button></a>
            </td>
     </tr>
    
     <?php endforeach; ?>

  </table>
</div>



</body>
</html>