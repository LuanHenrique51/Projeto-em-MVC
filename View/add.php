<html>
	<head>
		<title>Cadastro</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" sizes="32x32" href="../image/imagem-login.png">
		<link rel="stylesheet" href="../css/style02.css">
	</head>
	<body>
	<div class="container">
		<div class="form-group">
		<div class="centro">
		<h1 >Area de Cadastro</h1>
		<h1>Cadastro:</h1>
		<form action="../Controller/pessoa.add.php" action="_GET">
			Login:<input name="nome" class="form-control" type="text" required><br/>
			Senha: <input name="senha" class="form-control" type="password" required><br/>
			<input name="cadastrar" type="submit" class="btn btn-primary" value="Cadastrar"/>
		</form>
		<br/>
		<div class="a-1">
		<a href="viewtables.php" style="text-decoration:none; color: #000;">Ver todos<br/></a>
		</div>	
				</div>
			</div>
		</div>
	</body>
</html>