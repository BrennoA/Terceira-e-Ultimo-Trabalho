<?php

require_once("banco.php");
require_once("entity/UsuarioBd1.php");

var_dump($_POST);

$User = new Crud($_POST);

global $pdo;



    if($User->editar($nome, $email, $senha, $id) == true){
        if ($User > 0 ) {
            header('Location: login.php?user=1');
        }else{
            echo "erro";
        }

        }


?>
