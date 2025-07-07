<h2>Editar Usuario</h2>
<form method="post" action="index.php?seccion=usuarios&action=update">
    <input type="hidden" name="id" value="<?= htmlspecialchars($usuario['id']) ?>">

    <label>Nombre:</label>
    <input type="text" name="nombre" value="<?= htmlspecialchars($usuario['nombre']) ?>" required>

    <label>Email:</label>
    <input type="email" name="email" value="<?= htmlspecialchars($usuario['email']) ?>" required>

    <input type="submit" value="Actualizar">
</form>