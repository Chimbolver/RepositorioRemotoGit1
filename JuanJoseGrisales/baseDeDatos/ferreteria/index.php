<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferreteria</title>
    <style>
    
       * {
    text-align: center;
}

body {
    font-family: Arial, sans-serif;
    margin: 20px;
    padding: 20px;
    background-color: rgb(183, 189, 210);
}

h2 {
    color: black;
}

form {
    max-width: 400px;
    margin: 20px auto;
    padding: 20px;
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

input {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    background-color: grey;
    color: white;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #222;
}

hr {
    border: 1px solid #ddd;
}

.error {
    color: red;
}

.success {
    color: green;
}

.store-info {
    margin-top: 20px;
}

.store-info p {
    margin: 5px 0;
    font-size: 14px;
    color: #555;
}

    </style>
    </style>
</head>

<body>
    <?php
    require_once("config.php");

    $conn = new mysqli(BBDD_HOST, BBDD_USER, BBDD_PASSWORD, BBDD_NAME);

    if ($conn->connect_errno) {
        echo "FALLO en la conexión" . $conn->connect_error;
        exit;
    }

    echo "Conexión establecida con éxito";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["nom_ferreteria"];
        $address = $_POST["dir_ferreteria"];
        $cp = $_POST["cp_ferreteria"];

        $query = "INSERT INTO store (name, address, cp) VALUES ('$name', '$address', '$cp')";
        $result = $conn->query($query);

        if ($result) {
            echo "<p class='success'>Ferretería registrada con éxito</p>";
        } else {
            echo "<p class='error'>Error al registrar la ferretería: " . $conn->error . "</p>";
        }
    }

   
    ?>


    <hr>
    <h2>CREAR NUEVA FERRETERIA</h2>

    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST"><br><br>
        <input type="text" name="nom_ferreteria" placeholder="Nombre" required><br><br>
        <input type="text" name="dir_ferreteria" placeholder="Direccion" required><br><br>
        <input type="text" name="cp_ferreteria" placeholder="Codigo Postal " maxlength="5" required><br><br>
        <input type="submit" value="Alta">
        <?php
        $query1 = "SELECT id, name, address, cp FROM store";
        $result1 = $conn->query($query1);

        if ($result1->num_rows == 0) {
            echo "No hay ninguna ferretería registrada";
        } else {
            // Aquí puedes mostrar la lista de ferreterías si lo deseas
        }

        if ($result1 = $conn->query($query1)) {
            $result1->data_seek(0);
            while ($fila = $result1->fetch_assoc()) {

                printf(
                    "<p>id: %s nombre: %s direccion: %s codigo postal: %s</p>",
                    $fila["id"],
                    $fila["name"],
                    $fila["address"],
                    $fila["cp"]
                );

            }
            ;
            $result1->close();
        }
        ?>
    </form>
</body>

</html>