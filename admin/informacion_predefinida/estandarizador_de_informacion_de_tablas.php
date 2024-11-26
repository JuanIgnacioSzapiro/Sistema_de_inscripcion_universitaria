<?php
require_once(dirname(__FILE__) . "/asociador_de_arrays.php");
require_once(dirname(__FILE__) . "/lector_csv.php");


/**
 * Fabrica arrays asociados con la informacion de los csv para el encabezado de las tablas
 * @param mixed $nombre_tabla
 * @return array
 */
function estandarizador_de_tablas($nombre_tabla)
{
    return asociar(obtener_datos_default(PREFIJO_TABLA . $nombre_tabla . SUFIJO_CSV));
}

/**
 * Fabrica arrays asociados con la informacion de los csv para el contenido de las tablas
 * @return array
 */
function estandarizador_de_contenido_de_tablas($nombre_tabla)
{
    return asociar(obtener_datos_default($nombre_tabla . SUFIJO_CSV));
}
