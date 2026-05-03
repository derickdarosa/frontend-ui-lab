<?php
require_once __DIR__ . '/../Core/Autoload.php'; 
require_once __DIR__ . '/../app/Helpers/url.php';

use Controllers\AuthController;

$controller = new AuthController();

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $controller->login();
} else {
    $controller->showLogin();
}
?>