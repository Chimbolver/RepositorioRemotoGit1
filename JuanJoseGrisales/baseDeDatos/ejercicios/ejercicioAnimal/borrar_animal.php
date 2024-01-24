<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <h1>BORRAR UN ANIMAL</h1>
    <form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>">
        <label for="id">Elige un animal:</label>
        <select name="animales" required>
            <?php
            include("unirseBBDD.php");
            include("listado_animal.php");
            ?>
        </select>
        <input type="submit" name="Borrar" value="Borrar">
        <a href="alta_animal.php">Dar de alta a un animal</a>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['Borrar'])) {
            $animalElejido = $_POST['animales'];
            $eliminarAnimal = "DELETE FROM animal WHERE id = $animalElejido";
            $conex1->query($eliminarAnimal);

            echo "<h1 style='color:white;'>BORRADO DE MANERA CORRECTA</h1>";
        }
    }
    ?>
</body>

</html>