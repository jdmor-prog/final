<?php

spl_autoload_register(function ($class) {
    $paths = ['controllers', 'models', 'config'];
    foreach ($paths as $path) {
        $file = __DIR__ . "/$path/$class.php";
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});

$seccion = $_GET['seccion'] ?? 'cursos';
$action = $_GET['action'] ?? 'index';

switch ($seccion) {
    case 'usuarios':
        $controller = new UsuarioController();
        break;
    case 'perfiles':
        $controller = new PerfilController();
        break;
    case 'cursos':
        $controller = new CursoController();
        break;
    case 'lecciones':
        $controller = new LeccionController();
        break;
    case 'estudiantes':
        $controller = new EstudianteController();
        break;
    case 'matriculas':
        $controller = new MatriculaController();
        break;
    default:
        echo "Sección no encontrada.";
        exit;
}


if (method_exists($controller, $action)) {
    if ($action === 'desinscribir' && isset($_GET['id'], $_GET['curso_id'])) {
        $controller->desinscribir($_GET['id'], $_GET['curso_id']);
    
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $controller->$action($_POST);

    } elseif (isset($_GET['id']) || isset($_GET['curso_id'])) {
        $controller->$action($_GET['id'] ?? $_GET['curso_id']);

    } else {
        $controller->$action();
    }
} else {
    echo "Acción '$action' no válida para '$seccion'.";
}
