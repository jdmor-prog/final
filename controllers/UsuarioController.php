<?php
require_once __DIR__ . '/../models/Usuario.php';

class UsuarioController
{
    private Usuario $usuario;

    public function __construct()
    {
        $this->usuario = new Usuario();
    }

    public function index()
    {
        $usuarios = $this->usuario->getAll();
        include __DIR__ . '/../views/usuarios/index.php';
    }

    public function create()
    {
        include __DIR__ . '/../views/usuarios/create.php';
    }

    public function store($data)
    {
        if (empty($data['nombre']) || empty($data['email'])) {
            die("Error: El nombre y el email son obligatorios.");
        }
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            die("Error: El formato del email no es válido.");
        }

        $this->usuario->create($data['nombre'], $data['email']);
        header("Location: index.php?seccion=usuarios");
    }

    public function edit($id)
    {
        $usuario = $this->usuario->find($id);
        if (!$usuario) {
            die('Usuario no encontrado');
        }
        include __DIR__ . '/../views/usuarios/edit.php';
    }

    public function update($data)
    {
        if (empty($data['nombre']) || empty($data['email']) || empty($data['id'])) {
            die("Error: Todos los campos son obligatorios.");
        }
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            die("Error: El formato del email no es válido.");
        }

        $this->usuario->update($data['id'], $data['nombre'], $data['email']);
        header("Location: index.php?seccion=usuarios");
    }

    public function delete($id)
    {
        $this->usuario->delete($id);
        header("Location: index.php?seccion=usuarios");
    }
}
