<?php
    class Contato {

        private $pdo;
        
        function __construct(){
            require('config.php');

            $this->pdo = $pdo;
        }

        public function cadastrar($email, $nome=""){

            if(!$this->emailExistente($email)){
                return false;
            }

            // verifica se já existe o email na base de dados
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

        public function buscarUm($id){

            $sql = 'SELECT idcontato, nome, email FROM contato WHERE id = ?';
            $sql = $this->pdo->prepare($sql);
            $sql->bindParam(1, $id);
            $sql->execute();

            if($sql->rowCount() > 0){
                // retorna um array como resultado da pesquisa
                return $sql->fetch();
            }else{
                return array();
            }

        }

        public function buscarTodos(){

            $sql = 'SELECT idcontato, nome, email FROM contato';
            $sql = $this->pdo->prepare($sql);
            $sql->execute();

            if($sql->rowCount() > 0){
                // retorna um array como resultado da pesquisa
                return $sql->fetchAll();
            }else{
                return array();
            }

        }

        public function atualizar($id, $nome){

            if(!$this->emailExistente($id)){
                return false;
            }

            $sql = "UPDATE contato SET nome = ? WHERE id = ?";
            $sql = $this->pdo->prepare($sql);
            $sql->bindParam(1, $nome);
            $sql->bindParam(2, $id);
            $sql->execute();

            if($sql->rowCount() > 0){
                return true;
            }
            
            return false;

        }

        public function deletar($id){

            $sql = "DELETE FROM contato WHERE idcontato = ?";
            $sql = $this->pdo->prepare($sql);
            $sql->bindParam(1, $id);
            $sql->execute();

            if($sql->rowCount() > 0){
                return true;
            }
           
            return false;
        }

        private function emailExistente($email){
            if($email == " "){
                return false;
            }
            return true;
        }

    }
?>