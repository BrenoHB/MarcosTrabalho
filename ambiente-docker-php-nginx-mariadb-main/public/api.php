<?php
// Obter o cabeçalho de autorização da solicitação
$authorizationHeader = $_SERVER['HTTP_AUTHORIZATION'];

// Verificar se o cabeçalho de autorização está presente e tem o formato esperado
if ($authorizationHeader && preg_match('/Bearer\s+(.*)/', $authorizationHeader, $matches)) {
    $token = $matches[1];
    
    // Verificar se a senha corresponde à senha válida
    $validPassword = 'senha'; // Senha válida definida por você
    
    if ($token === $validPassword) {
       
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
require_once 'users.php';
$method = $_SERVER['REQUEST_METHOD'];
$params = $_GET;
$endpoint = isset($params['endpoint']) ? $params['endpoint'] : '';
$response = array();
if ($method == 'GET') {
    if ($endpoint == 'users') {
        $response = $users;
    } elseif ($endpoint == 'user' && isset($params['id'])) {
  
        $userId = $params['id'];
        $response = isset($users[$userId]) ? $users[$userId] : 'Usuário não encontrado.';
    }
}
echo json_encode($response);
    } else {
        // Senha inválida, retornar uma resposta de erro ou status de não autorizado
        http_response_code(401);
        echo "Senha inválida.";
        exit();
    }
} else {
    // Cabeçalho de autorização inválido ou ausente, retornar uma resposta de erro ou status de não autorizado
    http_response_code(401);
    echo "Cabeçalho de autorização inválido ou ausente.";
    exit();
}