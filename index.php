<?php
include "Model\connection.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="../image/imagem-login.png">
    <link rel="stylesheet" href="./css/style01.css">
    
    <title>Inicio</title>
</head>
<body>
    <div class="centro">
    <h1>Area de Login</h1>
    <form action="Model/connection.php" method="post">   
    Nome:<input type="text" name="login" required></br>
    Senha:<input type="password" name="senha" required></br>
        <input type="submit" value="Entrar">
        </div>
    </form>
</body>
</html>