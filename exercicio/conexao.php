<?php 
    $host = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'etecmcm';

    $conexao = new mysqli($host, $usuario, $senha, $banco);

    if($conexao->connect_error){
        die('Falha na conexão: ' . $conexao->connect_error);
    } 
    // else {
    //     echo "CONECTADO COM SUCESSO";
    // }
?>