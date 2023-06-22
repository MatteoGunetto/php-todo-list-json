<?php
header("Access-Control-Allow-Origin: http://127.0.0.1:5173");
header("Access-Control-Allow-Headers: X-Requested-With");

    // recupero il mio file json
    $tasksString = file_get_contents('file.json');

    // decode per renderlo un array associativo
    $tasks = json_decode($tasksString, true);
    // response json
    $response = [
    'success' => true,
    'message' => 'Ok',
    'code' => 200,
    'data' => $tasks
    ];
    //lo trasformo in json per prendere i dati dell'api
    $jsonResponse = json_encode($response);
    header('Content-Type: application/json');
    echo $jsonResponse;