<?php
    $dsn = 'mysql:host=sql2.njit.edu;dbname=my_guitar_shop1';
    $username = 'bl54';
    $password = '4qIHGWPk';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>