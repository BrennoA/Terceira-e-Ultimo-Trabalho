<?php
require_once("banco.php");
require_once("entity/UsuarioBd.php");

if (! isset($_SESSION["IdUser"])){
    
    header('Location: http://localhost/siteav3/editar.php');
}

global $pdo;
$produto = new CrudBd();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <title>Editar Usuario</title>
  </head>
  <body>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
    
    <div class="container">
        
        

        <h1>Editar Usuario</h1>
        <br><br>
        
        <html>
        <form action="EditarUsuario.php" method="POST">
        <input type="hidden">

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Digite o ID do usuario que deseja alterar</label>
              <input type="text" min="0" step="0.1" class="form-control" id="id"
               name="id"
              >
        
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Nome</label>
              <input type="text" class="form-control" id="nome"
               name="nome"
              >
           
             <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Email</label>
              <input type="text" min="0" step="0.1" class="form-control" id="email"
               name="email"
              >
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Senha</label>
              <input type="text" class="form-control" id="senha"
               name="senha"
              >
            </div>

            <input type="submit" value="Salvar" class="btn btn-success" role="button">
        </form>
    </html>
    

    <br><br>
    </div>

    <script>
        
    </script>
  </body>
</html>
