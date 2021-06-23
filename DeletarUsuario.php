<?php

require_once("banco.php");
require_once("entity/UsuarioBd.php");

var_dump($_POST);

$User = new CrudBd($_POST);

global $pdo;



    if($User->deletar($dltemail) == true){
        if ($User > 0 ) {
            header('Location: login.php?user=1');
        }else{
            echo "erro";
        }

        }


?>
