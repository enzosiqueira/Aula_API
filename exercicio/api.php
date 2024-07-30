<?php
    header('Content-Type: application/json');
    include 'conexao.php';

    $metodo = $_SERVER['REQUEST_METHOD'];   

    $url = $_SERVER['REQUEST_URI'];

    $path = parse_url($url, PHP_URL_PATH);
    $path = trim($path, '/');

    $path_parts = explode('/', $path);

    $primeiraparte = isset($path_parts[0]) ? $path_parts[0] : '';
    $segundaparte = isset($path_parts[1]) ? $path_parts[1] : '';
    $terceiraparte = isset($path_parts[2]) ? $path_parts[2] : '';
    $quartaparte = isset($path_parts[3]) ? $path_parts[3] : '';


    $resposta = [
        'metodo' => $metodo,
        'primeiraparte' => $primeiraparte,
        'segundaparte' => $segundaparte,
        'terceiraparte' => $terceiraparte,
        'quartaparte' => $quartaparte,
    ];

    //echo json_encode($resposta);

    switch($metodo){
        case 'GET':
            //LOGICA PARA GET
            if($terceiraparte == 'alunos' && $quartaparte == ''){
                echo json_encode([
                    'mensagem' => 'LISTA DE TODOS OS ALUNOS'
                ]);
            } 
            
            else if($terceiraparte == 'alunos' && $quartaparte != '') {
                echo json_encode([
                    'mensagem' => 'LISTA DE UM ALUNO',
                    'id_aluno' => $quartaparte
                ]);
            }

            else if ($terceiraparte == 'cursos' && $quartaparte != '') {
                echo json_encode([
                    'mensagem' => 'LISTA DE TODOS OS CURSOS',
                    'id_curso' => $quartaparte
                ]);
            }
            break;
            
        case 'POST':
            //LOGICA PARA POST
            break;
        case 'PUT':
            //LOGICA PARA PUT
            break;
        case 'DELETE':
            //LOGICA PARA GET
            break;
        default:
            echo json_encode([
                'mensagem' => 'Método não permitido!'
            ]);
            break;
    }
?>