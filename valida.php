<?php

if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){

    require 'banco.php';
    require 'Usuario_class.php';


    $u = new Usuario();

    
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    if($u->login($email, $senha) == true){
        if(isset($_SESSION['IdUser'])){
            header("Location: http://localhost/siteav3/menu.php");


        } else{
            header("Location: http://localhost/siteav3/login.php");
        }


    }else{

        header("Location: http://localhost/siteav3/login.php");
    }






}else{

    header("Location: http://localhost/siteav3/login.php");
}


?>
