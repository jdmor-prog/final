<!DOCTYPE html>
<html lang="es" data-theme="light">
<head>
    <meta charset="UTF-8">
    <title>Plataforma de Cursos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
    
    <style>
        body {
            padding: 1rem;
        }
        nav {
            margin-bottom: 2rem;
        }
        form > label {
            margin-top: 1rem;
        }
    </style>
</head>
<body>
    <main class="container">
        <header>
            <h1>Plataforma de Cursos</h1>
            <nav>
                <ul>
                    <li><a href="index.php?seccion=cursos" role="button">Cursos</a></li>
                    <li><a href="index.php?seccion=usuarios" role="button">Usuarios</a></li>
                    <li><a href="index.php?seccion=estudiantes" role="button">Estudiantes</a></li>
                </ul>
            </nav>
        </header>

        <?php include $contenido; ?>

    </main>

    <footer style="text-align: center; margin-top: 2rem; color: #777;">
        <small>Plataforma de cursos &copy; 2025</small>
    </footer>
</body>
</html>