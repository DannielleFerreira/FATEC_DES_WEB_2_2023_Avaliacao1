<?php
    session_start();

    if(!isset($_SESSION["login"]) || $_SESSION["login"] !== true)
    {
        header("location: index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastros</title>
</head>
<body>
<?php


    $arquivo    = "livros_cadastrado.txt";
    $titulo   = '';
    $autor    = '';
    $editora    = ''; 



    if(!file_exists($arquivo))
        $file = fopen($arquivo, "w");
    else 
        $file = fopen($arquivo, "r");

    while(!feof($file)) 
    {
        $line = fgets($file);
        

        if (stristr($line, 'Nome:'))
            $titulo = substr($line, 5, strlen($line)-6);
        if (stristr($line, 'Sug:'))
            $autor = substr($line, 4, strlen($line)-5);
        if (stristr($line, 'Duv'))
            $editora = substr($line, 4, strlen($line)-5);
        {
            
            echo $titulo.' | '.$autor.' | '.$editora.'<br>';
            
            $titulo   = '';
            $autor    = '';
            $editora   = '';
    
        }
        }
?>
    <p>
        <a href="welcome.php" class="btn btn-danger">Voltar</a>
    </p>

</body>
</html>