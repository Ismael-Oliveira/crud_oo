<?php 
    /* Connect to a MySQL database using driver invocation */
    $dsn = 'mysql:dbname=crud_oo_db;host=localhost';
    $user = 'root';
    $password = 'root';

    try {
        $pdo = new PDO($dsn, $user, $password);
        // echo "conexão realizada";
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
?>