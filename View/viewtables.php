<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todos os cadastros</title>
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
            <div class="d-1">
        <h1 style="color: #ffffff; font-family: 'Helvetica', 'Arial', sans-serif;">Todos os Cadastros</h1>
            <?php
                class Pessoa {
                    private $con;
                
                    function __construct($con) {
                        $this->con = $con;
                    }
                
                    function view() {
                        $sql = "SELECT id_usuario, ds_login, ds_senha FROM User";
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
                }
                
                // Instanciar a classe Pessoa
                $conexao = new mysqli("localhost", "root", "usbw", "CRUD");
                $pessoa = new Pessoa($conexao);
                
                // Chamar o método view
                $pessoa->view();
            ?>
            
            <br/>
            <button class="a-1">
                <a href="../index.php" style="text-decoration:none; color: #000; font-size: 13.5px">Voltar para o Inicio<br/></a>
            </button>    
        </div>
    </div>
</body>
</html>
