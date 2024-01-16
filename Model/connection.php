<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexão</title>
</head>
<body>
    <?php 


    session_start();
    $_SESSION['logado'] = false;
    $conexao = mysqli_connect("localhost", "root", "usbw", "CRUD"); 

    if(mysqli_connect_errno())
    {
        echo"A conexão SQL apresentou erro:" . mysqli_connect_erro();
    }
    if(isset($_POST['login']))
    {
        $login_usuario = mysqli_real_escape_string($conexao, $_POST['login']);
        $login_senha = mysqli_real_escape_string($conexao, $_POST['senha']);
    
        $seleciona_usuario = "select * from user where ds_login = '$login_usuario' and ds_senha = '$login_senha'";

        $procura = mysqli_query($conexao, $seleciona_usuario);

        $checa_usuario = mysqli_num_rows($procura);

        if($checa_usuario>0){
            $_SESSION['logado'] =true;
            $_SESSION['usu'] = $login_usuario;
            header("location: ../View/add.php");
        }
        else{
            echo "<script>alert('Login ou senha com erro, tente novamente'); window.location.href='../index.php';</script>";

        }
    }
    
    
    
    ?>
</body>
</html>
