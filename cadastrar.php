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
        <h1><b><?php echo htmlspecialchars($_SESSION["username"]); ?>
        <br>
        </b>cadastre um livro.</h1>
    </div>
    <p>
    <form action="enviar.php" method="post"> 
        <label class="contro-label small" for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo"><br><br>
        <label class="contro-label big" for="autor">Autor:</label>
        <input type="text" id="autor" name="autor"><br><br>
        <label for="editora">Editora:</label>
        <input type="text" id="editora" name="editora"><br><br>
        <input type="submit" value="Enviar">
    </form>
        <br> <br>
        <a href="logout.php" class="btn btn-danger">Sair da conta</a>
    </p>
</body>
</html>