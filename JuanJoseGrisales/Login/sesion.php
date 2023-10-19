<!DOCTYPE html>
<html>
<head>
    <title>Inicio de sesión</title>

</head>
<body>
    <h1>Inicio de sesión</h1>
  <form action="inicio.php" method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario" required><br><br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" id="contrasena" required><br><br>
        <input type="submit" value="Iniciar sesión">
    </form>
</body>
</html>