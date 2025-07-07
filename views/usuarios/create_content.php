<h2>Crear Nuevo Usuario</h2>
<form method="post" action="index.php?seccion=usuarios&action=store">
    <label for="nombre">Nombre de Usuario</label>
    <input type="text" id="nombre" name="nombre" placeholder="Ej: Juan Pérez" required>

    <label for="email">Correo Electrónico</label>
    <input type="email" id="email" name="email" placeholder="Ej: correo@ejemplo.com" required>

    <input type="submit" value="Guardar Usuario">
</form>