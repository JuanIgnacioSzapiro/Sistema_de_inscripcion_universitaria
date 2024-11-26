<?php
/**
 * Recibe el formato de csv con el nombre de la "variable" y su valor predefinido respectivo en la posición inmediata siguiente separados con ';' de manera consecutiva separados con los otros con ','
 * Retorna un array
 * @param mixed $ubicacion_del_archivo 
 * @return array ejemplo: nombre_de_usuario;admin,clave;admin
 */
function obtener_datos_default($ubicacion_del_archivo)
{
    return separar_punto_coma(obtener_datos($ubicacion_del_archivo));
}

function obtener_datos_default_como_string($ubicacion_del_archivo)
{
    return implode(",",obtener_datos($ubicacion_del_archivo));
}

/**
 * Devuelve el texto crudo de un .csv
 * @param mixed $ubicacion_del_archivo
 * @return array|bool
 */
function obtener_datos($ubicacion_del_archivo)
{
    $texto = [];
    try {
        $archivo = fopen(dirname(__FILE__) . "\csv\\" . $ubicacion_del_archivo, "r");
        $texto = fgetcsv($archivo, 0, ",");
        fclose($archivo);
    } catch (Exception $e) {
        echo "Error al leer archivo: " . $e->getMessage();
    }
    return $texto;
}


/**
 * Recibe el formato de csv con el nombre de la "variable" y su valor predefinido respectivo en la posición inmediata siguiente separados con ';' de manera consecutiva separados con los otros con ','
 * Devuelve un array de arrays de strings
 * @param mixed $valores ejemplo: (string) nombre_de_usuario;admin,clave;admin
 * @return array ejemplo: (array) [0] => (string) nombre_de_usuario;admin ; [1] => (string) clave;admin
 */
function separar_punto_coma($valores)
{
    $datos = [];
    foreach ($valores as $valor) {
        foreach (explode(";", $valor) as $valores_separados) {
            array_push($datos, $valores_separados);
        }
    }
    return $datos;
}


