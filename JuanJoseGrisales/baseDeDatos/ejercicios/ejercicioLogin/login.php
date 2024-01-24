<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(140, 160, 179);
            margin: 0;
            padding: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 10px 10px 10px 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            color: white;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="number"]:hover {
            background-color: #ccc;
        }

        input[type="text"]:hover {
            background-color: #ccc;
        }

        input[type="text"]: {
            border: 1px solid #ccc;
        }


        input[type="submit"] {
            background-color: skyblue;
            color: black;
            padding: 10px 20px;
            margin-left: 40%;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: aqua;
        }

        a {
            color: red;
            margin-left: 25%;
            text-decoration: none;
        }

        a:hover {
            color: blue;
        }
    </style>
</head>

    <body>
        <br><br><br>
        <h1>DAR DE ALTA UN ANIMAL</h1>
        <form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>">

            <label for="nombre">Correo o nombre de usuario:</label>
            <input type="text" id="nombreOcorreo" name="nombre" required><br><br>
            <label for="especie">Contraseña:</label>
            <input type="text" id="especie" name="especie" required><br><br>
            <input type="submit" value="Guardar"><br><br>
            <a href="borrar_animal.php"> Don't have account? Register</a>
        </form>
        <br><br>

        <?php
        $conex1 = new mysqli("localhost", "juanjoseGrisales", "Mimamamemima18", "juanjo"); // Abre una conexión
         if (mysqli_connect_errno()) { // Comprueba conexión
         printf("✂Conexión fallida: %s\n", mysqli_connect_error());
         exit();
         }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            function comprobar($data)
            {
                if (!empty(($_POST[$data]))) {
                    $data = trim(htmlspecialchars($_POST[$data]));
                } else {
                    $data = "";
                }
                return $data;
            }
            $usuario = comprobar("user");
            $correo = comprobar("correo");
            $contra = comprobar("contraseña");
          
            if (empty($usuario)) {
                $errors[] = "Tienes que poner el usuario";
            }
            if (empty($correo)) {
                $errors[] = "Tienes que poner el correo";
            }
            if (empty($contra)) {
                $errors[] = "Tienes que poner el contra";
            }
            if (empty($contra)) {
                $query = "INSERT INTO  animal (nombre, especie, edad) VALUES('$nombre','$especie','$edad')";
                $resultado = mysqli_query($conex1, $query);
                echo "<h1 style='color:white;'>AGREGADO DE MANERA CORRECTA</h1>";
                $conex1->close();
            } else {
                echo "<p style='color:red;'>";
                foreach ($errors as $e) {
                    echo "$e ";
                }
                echo "</p>";
            }
        }
        ?>
    </body>

</html>