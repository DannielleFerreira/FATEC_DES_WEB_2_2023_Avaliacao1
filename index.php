<?php
 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    if($_POST['username'] == 'fatec' and $_POST['password'] == 'araras'){
        $_SESSION['login'] = TRUE;
        $_SESSION["username"] = 'Fatec';
         header("location: welcome.php");
    } else {
        $_SESSION['login'] = FALSE;
    }
}
?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca</title>
</head>
<body>
    <div class="body">
        <h2>LOGIN</h2>
        <br><br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Usuário</label>
                <input type="text" name="username">
            </div>    
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="password">
            </div>
            <div >
                <input type="submit"  value="Logar">
            </div>
        </form>
    </div>    
</body>
</html>