<?php
    class Contato {

        private $pdo;
        
        function __construct(){
            require('config.php');

            $this->pdo = $pdo;
        }

        public function cadastrar($email, $nome=""){

            if($email == " "){
                return false;
            }

            $sql = 'SELECT email FROM contato WHERE email = ?';
            $sql = $this->pdo->prepare($sql);
            $sql->bindParam(1, $email);
            $sql->execute();

            if($sql->rowCount() > 0){
                return false;
            }

            $sql = 'INSERT INTO contato (nome, email) VALUES (:nome, :email)';

            $sql = $this->pdo->prepare($sql);
            $sql->bindParam(':nome', $nome);
            $sql->bindParam(':email', $email);
            $sql->execute();

            return true;
        }

    }
?>