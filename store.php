<?php
    // recupero il mio file  json
    $tasksString = file_get_contents('file.json');

    // decode per renderlo un array associativo
    $tasks = json_decode($tasksString, true);

    // pusho la nuova task nell'array del database
    $tasks[] = [
        'task' => $_POST['task']['task'],
        'done' => $_POST['task']['done'] == 'false' ? false : true
    ];

    $encodedTask = json_encode($tasks);

    file_put_contents('file.json', $encodedTask);

    $response = [
        'success' => true,
        'message' => 'Ok',
        'code' => 200,
        'data' => $tasks
    ];

    $jsonResponse = json_encode($response);

    header('Content-Type: application/json');

    echo $jsonResponse;