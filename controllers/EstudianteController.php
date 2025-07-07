<?php
require_once __DIR__ . '/../models/Estudiante.php';

class EstudianteController {
    private Estudiante $estudiante;

    public function __construct() {
        $this->estudiante = new Estudiante();
    }

    public function index() {
        $estudiantes = $this->estudiante->getAll();
        $contenido = __DIR__ . '/../views/estudiantes/index_content.php';
        include __DIR__ . '/../views/layout.php';
    }

    public function create() {
        $contenido = __DIR__ . '/../views/estudiantes/create.php';
        include __DIR__ . '/../views/layout.php';
    }

    public function store($data) {
        $this->estudiante->create($data['nombre_completo'], $data['email']);
        header("Location: index.php?seccion=estudiantes");
    }

    public function edit($id) {
        $estudiante = $this->estudiante->find($id);
        $contenido = __DIR__ . '/../views/estudiantes/edit.php';
        include __DIR__ . '/../views/layout.php';
    }

    public function update($data) {
        $this->estudiante->update($data['id'], $data['nombre_completo'], $data['email']);
        header("Location: index.php?seccion=estudiantes");
    }

    public function delete($id) {
        $this->estudiante->delete($id);
        header("Location: index.php?seccion=estudiantes");
    }
}