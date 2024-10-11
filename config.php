<?php 
    define('HOST','localhost');
    define('USER','root');
    define('PASS','');
    define('DATABASE','pi_uc7_lvg');

    $conn = new MySQLi(HOST, USER, PASS, DATABASE);

    if(!$conn) {
        echo "Falha na conexão com o Banco de Dados.";
    }

?>