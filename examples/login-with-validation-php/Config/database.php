<?php

try{
    return new \PDO(
        'mysql:host=localhost;dbname=banco_testes;charset=utf8mb4',
        'root',
        '',
        [
            \PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
} catch (PDOException $e){
    die('Erro ao conectar ao banco de dados.');
}

?>