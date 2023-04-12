<?php
session_start();

if(!isset($_SESSION["login"]) || $_SESSION["login"] !== true){
    header("location: index.php");
    exit;
}

?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    <div class="page-header">
        <h1>Olá, <b><?php echo htmlspecialchars($_SESSION["username"]); ?>
        <br>
        </b>Cadastro de livros da Biblioteca</h1>
    </div>
    <p> 
        <br> <br>
        <br> <br>
        <a href="cadastrar.php">Cadastrar livro</a>
        <br> <br>
        <a href="cadastro.php">Visualizar cadastros</a>
        <br> <br>
        <br> <br>
        <a href="logout.php">Sair</a>
    </p>
</body>
</html>
