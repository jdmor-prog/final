<?php
require_once __DIR__ . '/../config/Database.php';

class Usuario {
    private PDO $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    // Obtener todos los usuarios
    public function getAll(): array {
        $stmt = $this->db->query("SELECT * FROM usuarios");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Obtener un usuario por ID
    public function find($id): array|false {
        $stmt = $this->db->prepare("SELECT * FROM usuarios WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Crear un nuevo usuario
    public function create($nombre, $email): bool {
        $stmt = $this->db->prepare("INSERT INTO usuarios (nombre, email) VALUES (?, ?)");
        return $stmt->execute([$nombre, $email]);
    }

    // Actualizar usuario
    public function update($id, $nombre, $email): bool {
        $stmt = $this->db->prepare("UPDATE usuarios SET nombre = ?, email = ? WHERE id = ?");
        return $stmt->execute([$nombre, $email, $id]);
    }

    // Eliminar usuario
    public function delete($id): bool {
        $stmt = $this->db->prepare("DELETE FROM usuarios WHERE id = ?");
        return $stmt->execute([$id]);
    }

    // Obtener perfil relacionado (relación 1:1)
    public function obtenerPerfil($usuario_id): array|false {
        $stmt = $this->db->prepare("SELECT * FROM perfiles WHERE usuario_id = ?");
        $stmt->execute([$usuario_id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
