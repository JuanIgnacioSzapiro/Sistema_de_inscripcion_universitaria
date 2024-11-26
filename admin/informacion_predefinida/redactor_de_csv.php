<?php
function escribir($nombre_de_archivo, $data)
{
    // Abrir el archivo para escritura
    if ($file = fopen(dirname(__FILE__) . "\csv\\" . $nombre_de_archivo, 'w')) {
        // Escribir cada fila de datos en el archivo CSV
        fwrite($file, $data);
        // Cerrar el archivo
        fclose($file);
    } else {
        echo "No se pudo abrir el archivo $nombre_de_archivo.";
    }
}
