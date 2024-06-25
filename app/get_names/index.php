<?php
    //AQUI VAI SER NOSSA APLICAÇÃO
    require_once __DIR__ . '/../../api/config.php';
    require_once __DIR__ . '/../../api/response.php';

    $data = require_once __DIR__ . '/../../api/data.php';

    $names = [];
    
    foreach($data as $item){
        $names[] = $item['nome'];
    }

    echo Response::resp(200,'success',$names);
?>