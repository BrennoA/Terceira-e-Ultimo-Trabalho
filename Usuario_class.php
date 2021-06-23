<?php

class Usuario{

    public function login($email, $senha){
        global $pdo;

        $sql = "SELECT * FROM usuario where email = :email AND senha = :senha ";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("email", $email);
        $sql->bindValue("senha", $senha);
        $sql->execute();
      

        if($sql->rowCount() > 0){
            $dado = $sql->fetch();

            $_SESSION['IdUser'] = $dado['id'];

            return true;
        }else{
            return false;
        }



    }

}


?>
