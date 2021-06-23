<?php
require_once("banco.php");

if (! isset($_SESSION["IdUser"])){
    
    header('Location: http://localhost/siteav3/menu.php');
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Tela de menu</title>

   <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

   <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<style>
  #carrinho{padding-left:90%;}
</style>

  </head>


  <body>

  <!--JavaScript at end of body for optimized loading-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  
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



      
      <a href="consultaProduto.php">Cadastro de Produtos</a>
      <br><br>
    <h1 style="text-align:center" >Usuarios Cadastrados</h1>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

     <?php

        global $pdo;
        
        echo "<div class='container'>";
        echo "<table class='table'>";
        echo "<tr><th>Id</th><th>Nome</th><th>Email</th><th>Senha</th>";
        
        foreach($pdo->query('SELECT * from usuario') as $row) {
            echo "<tr><td>".$row['id']."</td>
                  <td>".$row['nome']."</td>
                  <td>".$row['email']."</td>
                  <td>".$row['senha']."</td>";
            echo "<td><a href='Editar.php' nome='buttonedit' class='btn-floating orange'><i class='material-icons'>edit</i></a></td>";
            echo "<td><a href='Deletar.php' class='btn-floating red'><i class='material-icons'>delete</i></a></td>";
          }
          echo "</tr>";
          echo "</table>";
      ?>

    <a href="adicionar.php" class="btn btn-primary">Adicionar usuário</a>
      </div>  
    
</div>

  </body>
</html>
