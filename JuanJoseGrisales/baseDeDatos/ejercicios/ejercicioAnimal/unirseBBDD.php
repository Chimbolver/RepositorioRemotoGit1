<?php
$conex1 = new mysqli("localhost", "juanjoseGrisales", "Mimamamemima18", "juanjo"); // Abre una conexión
 if (mysqli_connect_errno()) { // Comprueba conexión
 printf("✂Conexión fallida: %s\n", mysqli_connect_error());
 exit();
 }