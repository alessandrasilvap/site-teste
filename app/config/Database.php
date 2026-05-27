<?php
/*Conexão com o banco de dados*/
class Database {
    public static function conectar() {
        return new PDO(
            "mysql:host=localhost;dbname=mvc_exemplo",
            "root",
            ""
        );
    }
}
?>
