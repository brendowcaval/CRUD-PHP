<html>
 <head>
    <title>
        CRUD - Cadastrar
    </title>
    <style>
        .center {
           text-align: center;
           font-size: 40px;
        }
        div {
           margin: auto;
           width: 70%;
           border: 3px solid;
           padding: 40px;
           border-style: ridge;
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
    

<h1 class="center">Cadastrar</h1>

<div>
<form method="POST" action="cadastrar_action.php">
    <label>
        Nome:  <input type="text" name="nome"/>
    </label> 
    <label>
        Email: <input type="email" name="email"/>
    </label> 
    <input type="submit" value="Cadastrar" class="button"/>
    
</form>
</div>

</body>
</html>