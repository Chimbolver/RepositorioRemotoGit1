!DOCTYPE html>
<html>
<head>
    <title>Acceso</title>
</head>
<body>
    <?php
    
    $contrasena = $_POST['contrasena'];

    if ($usuario == 'Juan' && $contrasena == '160312') {
        echo "<h1>Hola, $usuario</h1>";
    } else {
        echo "<h1>Usuario incorrecto</h1>";
        echo '<a href="sesion.php"><button>Volver al inicio</button></a>';
    }
    ?>
</body>
</html>


