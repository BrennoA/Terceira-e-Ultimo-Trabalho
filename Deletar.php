<?php
require_once("banco.php");
require_once("entity/UsuarioBd.php");


global $pdo;

$dltUser = new CrudBd();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <title>Deletar usuario</title>
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
        
        <h1>Deseja  realmente excluir este Usuario?</h1>
        <br><br>
        <?php
        echo '
        <form action="DeletarUsuario.php" method="POST">
        <input type="hidden" name="email" >
        
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Digite o Email e confirme</label>
              <input type="text" class="form-control" id="exampleFormControlInput1"
               name="dltemail"
              >
            
            <div class="row">
                <div class="col">
                    <a href="menu.php"
                     class="btn btn-success" role="button"> Não </a>
                </div>
                <div class="col">
                    <input type="submit" value="Sim" class="btn btn-danger" role="button">
                </div>
            </div>
        </form>
        ';

        ?>
    

    <br><br>
    </div>

    <script>
        
    </script>
  </body>
</html>