<?php
 $conex1 = new mysqli("localhost", "juanjoseGrisales", "Mimamamemima18", "juanjo"); // Abre una conexión
 if (mysqli_connect_errno()) { // Comprueba conexión
 printf("✂Conexión fallida: %s\n", mysqli_connect_error());
 exit();
 }
 $query = "SELECT * FROM users";
 if ($result = $conex1->query( $query))  // Sí hay resultados
 $result->data_seek(0); // Apunta a la primera fila
 while ( $fila = $result->fetch_assoc()) { // Extrae fila apuntada y apunta a la siguiente
 printf ("nombre: %s apellido: %s\n", $fila["name"], $fila["lastname"] );echo"<br>";// Muestra sus datos
 }
