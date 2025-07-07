<h2>Editar Estudiante</h2>
<form method="post" action="index.php?seccion=estudiantes&action=update">
    <input type="hidden" name="id" value="<?= htmlspecialchars($estudiante['id']) ?>">
    
    <label>Nombre Completo:</label>
    <input type="text" name="nombre_completo" value="<?= htmlspecialchars($estudiante['nombre_completo']) ?>" required>
    <br>
    <label>Email:</label>
    <input type="email" name="email" value="<?= htmlspecialchars($estudiante['email']) ?>" required>
    <br>
    <button type="submit">Actualizar</button>
</form>