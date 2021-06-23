<!DOCTYPE html>
<html>

<head>
	 <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

   <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

	<title>MasterTec</title>

  <link href="style.css" rel="stylesheet" type="text/css">

	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">

  <style>
.card{
height: 370px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

  </style>

</head>

<!--Menu1-->

<body>

    
<script src="script.js"></script>

<nav class="navbar navbar-light" style="background-color: #023e8a;">

 <div class="container-fluid">
  <a class="navbar-brand" href="index.php">
	<img src="logo.png" width="200" height="60" >
  </a>
  
  <ul class="nav justify-content-end">
	<ul class="nav justify-content-center">
	 <a href="login.php">
	 <button type="button" class="btn btn-outline-secondary">Login</button>
	 </a>
	 <a href="cadastro.html">
	  <button type="button" class="btn btn-primary">Cadastre-se</button>
	 </a>
	</ul>
  </ul>
</div>
</nav>
<nav class="navbar bg-dark">
<div id="carrinho">
 <a href="carrinho.html">
	  <img src="carrinho.png" width=20%>
	  <button type="button" class="btn-outline-success" style="text-align:right"> Meu carrinho</button>
	 </a>
</nav>
</div>
</nav>


<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Login</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form action="valida.php" method="POST">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name='email' class="form-control" placeholder="Usuário/Email">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name='senha' class="form-control" placeholder="Senha">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Lembrar
					</div>
					<div class="form-group">
						<input type="submit" value="Entrar" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Não tem uma conta?<a href="cadastro.html">cadastre-se</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Esqueci minha senha</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
