<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabela de usuarios</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../image/imagem-login.png"> 
    <link rel="stylesheet" href="../css/style03.css">

    <style>
        .d-1 {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .a-1 {
            margin: 10px;
        }
    </style>
</head>
<body>
<body>
    <div class="container">
        <div class="centro">
            <div class="d-1">
            <button class="a-1">
                <a href="../index.php" style="text-decoration:none; color: #000; font-family: 'Helvetica', 'Arial', sans-serif;
    font-size: 13.5px;">Voltar para o Inicio<br/></a>
            </button>
<?php

class Pessoa {
    public $idpessoa;
    public $nome;
    public $senha;
    private $con;

    function __construct($con) {
        $this->con = $con;
    }

    function view() {
    $sql = "SELECT id_usuario, ds_login, ds_senha FROM User ";
        $query = $this->con->query($sql);

        echo "<table class='pessoa-table'>
                <tr>
                    <th>ID</th>
                    <th>Login</th>
                    <th>Senha</th>
                </tr>";

        while ($row = $query->fetch_array()) {
            $idpessoa = $row["id_usuario"];
            $nome = $row["ds_login"];
            $senha = $row["ds_senha"];

            echo "<tr>
                    <td>$idpessoa</td>
                    <td>$nome</td> 
                    <td>$senha</td>              
                  </tr>";

        }

        echo '</table>';
        echo '<p class="registro-count">Registros encontrados: ' . $query->num_rows . '</p><br/>';
    }

    function edit_bd($idpessoa) {
        $sql = "SELECT * FROM User WHERE id_usuario = $idpessoa";
        $query = $this->con->query($sql);
        $res = $query->fetch_object();
        $this->idpessoa = $res->id_usuario;
        $this->nome = $res->ds_login;
        $this->senha = $res->ds_senha;
    }

    function delete($idpessoa) {
        $sql = "DELETE FROM User WHERE id_usuario = $idpessoa";
        return $this->con->query($sql);
    }

    function add($nome, $senha) {
        $sql = "INSERT INTO User (ds_login, ds_senha) VALUES ('$nome', '$senha')";
        $result = $this->con->query($sql);

        if ($result) {
            echo "<p style='color: #ffffff; font-weight: bold;'>Cadastro realizado com sucesso!</p>";

        } else {
            echo "<script>alert('Cadastro de usuário não efetuado.'); window.location.href='../index.php';</script>";
exit();
        }

        // Agora, chame a função view após o cadastro bem-sucedido
        $this->view();
        exit();
    }
}


$ds_login = $_GET['nome'];  //campo de login
$ds_senha = $_GET['senha'];  // campo'senha'

// Exemplo de uso:
$conexao = new mysqli("localhost", "root", "usbw", "CRUD");
$pessoa = new Pessoa($conexao);



// Adicione um registro
$pessoa->add($ds_login, $ds_senha);



?>

</head>
</body>
