<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>formulário de validação</h1>
    <form>
        <label>Nome</label>
            <input type="text" name="nome">

            <button type="submit">enviar</button>
    </form>
</body>
</html>




<?php

    if(isset($_GET["nome"]) && !empty($_GET["nome"])){
        $nome = $_GET['nome'];
        echo "seja bem-vindo: $nome";
    }else{
        echo "preencha seu nome";
    }
    


?>