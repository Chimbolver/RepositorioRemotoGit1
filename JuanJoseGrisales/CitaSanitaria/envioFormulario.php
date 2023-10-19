<!DOCTYPE html>
<html>
<head>
    <title>Resultado de la Cita</title>
</head>
<body>
    <h1>Resultado de la Cita</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["nombre"])){
            $nombre=trim($_POST["nombre"]);

            if(strlen($nombre)<2){
                    $errors[]="El nombte no tiene la longitud requerida, por favor revise.";

            }
        }
    elseif(strlen($nombre)>30){
            $errors[]="La longitud del nombre es demasiado larga, no tiene sentido, revisa tu formulario";

    }
    if(isset($_POST["numseg"])){
        $numseg=trim($_POST["numseg"]);

        if(strlen($numseg)>14 or strlen($numseg)<14){
            $errors[]="La longitud del numero de la SS es demasiado corto o largo, tienen que ser 14 caracteres";
        }
    }
    if(isset($_POST["telefono"])){
        $telefono=trim($_POST["telefono"]);

        if(strlen($telefono)>9){
            $errors[]="El numero de telefono es mas largo de lo permitido";
        }elseif (strlen($telefono)<9) {
            $errors[]="El numero de telefono introducido es demasiado corto, cuempruebe por favor.";
        }
    }

        $telefono = $_POST["telefono"];
        $email = $_POST["email"];
        $fecha = $_POST["fecha"];
        $motivo = $_POST["motivo"];
        $especialista = $_POST["especialista"];

        echo "<p>Nombre: " . $nombre . "</p>";
        echo "<p>Teléfono: " . $telefono . "</p>";
        echo "<p>Correo Electrónico: " . $email . "</p>";
        echo "<p>Fecha de la Cita: " . $fecha . "</p>";
        echo "<p>Motivo de la Cita: " . $motivo . "</p>";
        echo "<p>Especialista Seleccionado: " . $especialista . "</p>";
    } else {
       
        echo "<p>Error: Acceso no válido.</p>";
    }
    ?>

    
    <p><a href="cita_sanitaria.php">Volver al Formulario</a></p>
</body>
</html>