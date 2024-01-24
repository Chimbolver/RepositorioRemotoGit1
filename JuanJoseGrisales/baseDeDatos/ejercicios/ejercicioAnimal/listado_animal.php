<?php

   
    $query = "SELECT id,nombre,especie,edad FROM animal";
    if ($result = $conex1->query($query)) {
        $result->data_seek(0);
        while ($fila = $result->fetch_assoc()) {
            
            printf('<option value="%s" >Nombre:  %s - Especie:  %s -  Edad: %s  </option>',
                $fila["id"], $fila["nombre"], $fila["especie"], $fila["edad"]
            );
         
        }
        $result->close();
    }
    
