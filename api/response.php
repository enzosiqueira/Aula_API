<?php
    class Response {
        public static function resp($status = 200,$message = 'Deu certo pai!!',$data = null,){
            header('Content-type: application/json');

            //Check if the API is active
            if(!API_IS_ACTIVE){
                return json_encode([
                    'status' => 400,
                    'mensagem' => 'API is not running',
                    'api_version' => API_VERSION,
                    'time_response' => time(),
                    'datetime_response' => date('Y-m-d H:i:s'),
                    'dados' => null,
                ], JSON_PRETTY_PRINT);
            }

            return json_encode([
                'status' => $status,
                'message' => $message,
                'api_version' => API_VERSION,
                'time_response' => time(),
                'datetime_response' => date('Y-m-d H:i:s'),
                'dados' => $data,
            ], JSON_PRETTY_PRINT);
        }
    }
?>