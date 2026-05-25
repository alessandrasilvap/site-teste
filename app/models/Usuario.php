<?php
require_once __DIR__ . '/../config/Database.php';

class Usuario {

    public function listar() {
        $db = Database::conectar();
        return $db->query("SELECT * FROM usuarios");
    }

    public function criar($nome, $email) {
        $db = Database::conectar();
        $stmt = $db->prepare(
            "INSERT INTO usuarios (nome, email) VALUES (?, ?)"
        );
        $stmt->execute([$nome, $email]);
    }
}
