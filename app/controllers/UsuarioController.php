<?php
/*Controlador para gerenciar usuários*/
require_once __DIR__ . '/../models/Usuario.php';

class UsuarioController {

    public function index() {
        $model = new Usuario();
        $usuarios = $model->listar();
        require __DIR__ . '/../views/usuarios/index.php';
    }

    public function criar() {
        if ($_POST) {
            $model = new Usuario();
            $model->criar($_POST['nome'], $_POST['email']);
            header("Location: /site-teste/public/");
            exit;
        } else {
            require __DIR__ . '/../views/usuarios/criar.php';
        }
    }
}
?>
