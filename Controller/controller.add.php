<?php
include "../Controller/pessoa.add.php"; // Substitua pelo caminho real para o seu arquivo da classe

if (isset($_POST['cadastrar'])) {
    // Conecta ao banco de dados (substitua com suas configurações)
    $conn = new mysqli("localhost", "root", "usbw", "CRUD");

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }

    // Obtém os dados do formulário
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    // Cria um objeto Pessoa
    $pessoa = new Pessoa($conn);

    // Chama o método add para adicionar o novo registro
    if ($pessoa->add($nome, $senha)) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . $conn->error;
        header "Location: ../index.php";
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
}
?>
