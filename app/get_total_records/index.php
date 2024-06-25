<?php
    //AQUI VAI SER NOSSA APLICAÇÃO
    require_once __DIR__ . '/../../api/config.php';
    require_once __DIR__ . '/../../api/response.php';

    $data = require_once __DIR__ . '/../../api/data.php';

    echo Response::resp(200,'success',['toal_registros' => count($data)]);
?>