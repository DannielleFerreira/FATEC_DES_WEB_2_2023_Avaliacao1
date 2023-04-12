<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros cadastrado</title>
</head>
<body>
<?php
        
    if((ISSET($_POST['titulo'])) and (ISSET($_POST['autor'])) and (ISSET($_POST['editora']))) 

        {
            $titulo = $_POST['titulo'];
            $autor = $_POST['autor'];
            $editora = $_POST['editora'];
        }

        {
        
            echo '<br><br> Livro cadastradas com Sucesso!! '.' <br>'; echo '<br>';
            echo 'Título: ' , $titulo; echo '<br>';
            echo 'Autor: ', $autor; echo '<br>';
            echo 'Editora: ', $editora; echo '<br>';
            $arquivo = "livros_cadastrado.txt";

        if(!file_exists("livros_cadastrado.txt"))
        

        {
            $handle = fopen("livros_cadastrado.txt", "w");
        }     
        
        else 
        
        {
            $handle = fopen("livros_cadastrado.txt", "a");
        }
            
            fwrite($handle, "Título:".$titulo."\n");
            fwrite($handle, "Autor:".$autor."\n");
            fwrite($handle, "Editora:".$editora."\n");
            
            fwrite($handle,"\n");
            fflush($handle);
            fclose($handle);
    
        }
    
?>
</body>
</html>