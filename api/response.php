<?php 
    class Response {
        public static function resposta($status=200,$message='sucesso', $data=null) {
            // Aqui vai o corpo da resposta
            header('Content-Type: application/json');

            return json_encode([
                'status' => $status,
                'mensagem' => $message,
                'dados' => $data
            ]);
            
        }
    }
?>