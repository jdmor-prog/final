<?php
require_once __DIR__ . '/../models/Perfil.php';

class PerfilController {
    private Perfil $perfil;

    public function __construct() {
        $this->perfil = new Perfil();
    }

    public function edit($usuario_id) {
        $perfil = $this->perfil->getByUsuario($usuario_id);
        include __DIR__ . '/../views/perfiles/edit.php';
    }

    public function store($data) {
        $perfilExistente = $this->perfil->getByUsuario($data['usuario_id']);
        if ($perfilExistente) {
            $this->perfil->update($perfilExistente['id'], $data['bio']);
        } else {
            $this->perfil->create($data['usuario_id'], $data['bio']);
        }
        header("Location: index.php?seccion=usuarios");
    }
}
