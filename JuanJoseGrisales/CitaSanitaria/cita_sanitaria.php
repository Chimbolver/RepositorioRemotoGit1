<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Cita Sanitaria</title>
</head>
<body>
    <h1>Solicitud de Cita Sanitaria</h1>
    <form action="envioFormulario.php" method="post">
        <label for="nombre">Nombre completo:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="numseg">Número de la seguridad social:</label>
        <input type="text" id="numseg" name="numseg" min="14" max="14" required><br><br>

        <label for="telefono">Teléfono de contacto:</label>
        <input type="tel" id="telefono" name="telefono" required><br><br>

        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="fecha">Fecha deseada para la cita:</label>
        <input type="date" id="fecha" name="fecha" required><br><br>

        <label for="motivo">Motivo de la cita:</label>
        <textarea id="motivo" name="motivo" rows="4" required></textarea><br><br>

        <label for="especialista">Elija un especialista:</label>
        <select id="especialista" name="especialista">
            <?php
            $especialistas = array(
                'Neurólogo',
                'Medico de Cabecera',
                'Nutricionista',
            );

            foreach ($especialistas as $especialista) {
                echo "<option value='" . $especialista . "'>" . $especialista . "</option>";
            }
            ?>
        </select><br><br>
        <label for="acepto">Acepto la política de privacidad:</label><br><br>
        <input type="radio" id="acepto" name="acepto" required>Acepto</input>
        <input type="radio" id="acepto" name="acepto" required>No acepto</input><br><br>
        <input type="submit" value="Enviar solicitud de cita">
    </form>
</body>
</html>