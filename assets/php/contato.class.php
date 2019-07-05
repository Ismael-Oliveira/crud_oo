<?php
    class Contato {

        private $pdo;
        
        function __construct(){
            require('config.php');

            $this->pdo = $pdo;
        }

        
    }
?>