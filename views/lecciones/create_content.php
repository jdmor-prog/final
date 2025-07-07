<h2>Crear Nueva Lección</h2>
<form method="post" action="index.php?seccion=lecciones&action=store">
    
    <input type="hidden" name="curso_id" value="<?= htmlspecialchars($_GET['id']) ?>">

    <label for="titulo">Título de la Lección</label>
    <input type="text" id="titulo" name="titulo" placeholder="Ej: ¿Qué es PHP?" required>
    
    <label for="contenido">Contenido de la Lección</label>
    <textarea id="contenido" name="contenido" placeholder="Escribe aquí el contenido..." required></textarea>
    
    <button type="submit">Guardar Lección</button>
</form>