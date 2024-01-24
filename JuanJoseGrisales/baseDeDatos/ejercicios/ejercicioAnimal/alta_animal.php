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
            margin-left: 36%;
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

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>
            <label for="especie">Especie:</label>
            <input type="text" id="especie" name="especie" required><br><br>
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" required><br><br>
            <input type="submit" value="Guardar"><br><br>
            <a href="borrar_animal.php">Borrar un animal</a>
        </form>
        <br><br>

        <?php
        include("unirseBBDD.php");
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

            $nombre = comprobar("nombre");
            $especie = comprobar("especie");
            $edad = comprobar("edad");

            if (empty($especie)) {
                $errors[] = "Tienes que poner la especie";
            }
            if (empty($nombre)) {
                $errors[] = "Tienes que poner el nombre";
            }
            if (empty($edad)) {
                $errors[] = "Tienes que poner el edad";
            }
            if (empty($errors)) {
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