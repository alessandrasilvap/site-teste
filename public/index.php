<?php
require_once __DIR__ . '/../app/controllers/UsuarioController.php';

$controller = new UsuarioController();

$acao = $_GET['acao'] ?? 'index';

if ($acao == 'criar') {
    $controller->criar();
} else {
    $controller->index();
}
