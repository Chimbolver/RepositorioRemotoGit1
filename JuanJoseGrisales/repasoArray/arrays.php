<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Bucles</title>
</head>

<body>
    <h1>Ejercicio 1</h1>
    <?php
    $personas = array("Leo", "Johan", "Karol", "Meryem", "Bryan");

    echo $personas[0] . "<br>";
    echo end($personas);
    ?>

    <h1>Ejercicio 2</h1>
    <?php
    $colores = array("rojo", "verde", "azul", "índigo");
    sort($colores);

    foreach ($colores as $color) {
        echo $color . "<br>";
    }

    ?>
    <h1>Ejercicio 3</h1>
    <?php
    $frutas = array("manzana", "banana", "naranja", "manzana", "uva", "pera", "naranja");
    $arrayUnico = array_unique($frutas);

    foreach ($arrayUnico as $arrayUn) {
        echo $arrayUn . "<br>";
    }
    ?>

    <h1>Ejercicio 4</h1>
    <?php
    $estudiantes = array("Patrick" => "Aprobado", "María" => "Suspenso", "Carla" => "Aprobado");
    $cont = 0;
    foreach ($estudiantes as $clave => $valor) {
        if ($valor == 'Aprobado') {
            $cont++;


        }
    }
    echo "Han aprobado: " . $cont;
    ?>

    <h1>Ejercicio 5</h1>
    <?php
    $precios = array("manzana" => 0.5, "banana" => 0.25, "uva" => 1.0);

    $banana = $precios["banana"];
    $manzana = $precios["manzana"];

    $suma = $banana + ($manzana * 2);

    echo "El precio de una banana y dos manzanas es: " . $suma;
    ?>

    <h1>Ejercicio 6</h1>
    <?php
    $equipos = array("Madrid" => 3, "Barcelona" => 2, "Valencia" => 1, "Vigo" => 4);
    foreach ($equipos as $claves => $v) {
        if ($v >= 2) {
            $equipito[] = $claves;

        }
    }
    print_r($equipito);

    ?>

    <h1>Ejercicio 7</h1>
    <?php
    $nombres = array("Juan", "Marsha", "María", "Elena", "Ahmed", "Ling");

    foreach ($nombres as $primeraLetra) {
        if (substr($primeraLetra, 0, 1) == 'M') {
            echo $primeraLetra . "<br>";
        }
    }

    ?>

    <h1>Ejercicio 8</h1>
    <?php
    $meses = array("enero", "febrero", "marzo", "abril", "mayo");
    $mes_con_r = array();
    foreach ($meses as $key) {
        if (strpos($key, "r") == false) {

        } else {
            $mes_con_r[] = $key;

        }


    }
    foreach ($mes_con_r as $key) {
        echo "$key  ";
    }



    ?>

    <h1>Ejercicio 9</h1>
    <?php
    $notas = array(8, 7, 6, 9, 5);
    $min = min($notas);


    echo "La nota más baja del array es: " . $min;

    ?>

    <h1>Ejercicio 10</h1>
    <?php
    $calificaciones = array("Ahmed" => "A", "María" => "B", "Karol" => "C", "Myrna" => "A", "Luisa" => "A");
    foreach ($calificaciones as $cali => $c) {
        if ($c == 'A') {
            $losMasAltos[] = $cali;

        }
    }
    print_r($losMasAltos);
    ?>

    <h1>Ejercicio 11</h1>
    <?php
    $estudiantes = array(
        "Yusuff" => array("matemáticas" => 90, "historia" => 85, "inglés" => 88),
        "María" => array("matemáticas" => 92, "historia" => 78, "inglés" => 95),
        "Carlos" => array("matemáticas" => 88, "historia" => 90, "inglés" => 92)
    );

    $estudiantes_media = array();
    foreach ($estudiantes as $enombre => $e) {
        $suma = 0;
        $promedio = 0;
        foreach ($e as $nota) {
            $suma += $nota;

        }
        $promedio = $suma / count($e);
        $estudiantes_media[$enombre] = $promedio;
    }
    echo "las notas en orden son: <br>";
    arsort($estudiantes_media);

    foreach ($estudiantes_media as $nombre => $key) {
        echo $nombre . " " . $key . " <br>";
    }
    $masnota=max($estudiantes_media);

    echo"el mayor es =".$masnota

    
    


    ?>

    <h1>Ejercicio 12</h1>
    <?php
    $empleados = array(
        "Juan" => array("salario" => 2500, "departamento" => "Ventas"),
        "María" => array("salario" => 3000, "departamento" => "Marketing"),
        "Karol" => array("salario" => 2800, "departamento" => "Ventas")
    );
    ?>

    <h1>Ejercicio 22</h1>
</body>
<?php
$ventas = array(
    "producto1" => array("precio" => "10", "ventas" => "4"),  
    "producto2" => array("precio" => "20", "ventas" => "3"), 
    "producto3" => array("precio" => "50", "ventas" => "1"));

    $total=0;
    foreach ($ventas as $v ) {
        $total+=$v["precio"]*$v["ventas"];
       
    }
    echo"El total es = ".$total;
?>

</html>