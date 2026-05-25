<?php
/*Ponto de entrada do site, roteando para o controlador de usuários*/
require_once __DIR__ . '/../app/controllers/UsuarioController.php';

$controller = new UsuarioController();

$acao = $_GET['acao'] ?? 'index';

if ($acao == 'criar') {
    $controller->criar();
} else {
    $controller->index();
}
?>