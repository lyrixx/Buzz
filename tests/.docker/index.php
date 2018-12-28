<?php

declare(strict_types=1);
if (isset($_GET['redirect_to'])) {
    header('Location: '.$_GET['redirect_to']);
    die;
}

if (isset($_GET['delay'])) {
    sleep((int) $_GET['delay']);
}

if (isset($_GET['file_size'])) {
    echo str_repeat('x', (int) $_GET['file_size']);
    return;
}

echo json_encode([
    'SERVER' => $_SERVER,
    'GET' => $_GET,
    'POST' => $_POST,
    'FILES' => $_FILES,
    'INPUT' => file_get_contents('php://input'),
]);
