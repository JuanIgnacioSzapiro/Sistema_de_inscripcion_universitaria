<?php

require_once(dirname(__FILE__) . "/admin/informacion_predefinida/constantes.php"); // Llamada al archivo de constantes
require_once(dirname(__FILE__) . "/admin/informacion_predefinida/asociador_de_arrays.php");
// borrado de base de datos
function desinstalar_plugin()
{
    global $wpdb;

    eliminar_tablas($wpdb);
}

function eliminar_tablas($wpdb)
{
    $tablas = TOTALIDAD_TABLAS;

    foreach ($tablas as $tabla) {
        eliminar_tabla($wpdb, $tabla);
    }
}

function eliminar_tabla($wpdb, $nombre_tabla)
{
    $nombre_tabla_completo = $wpdb->prefix . asociar(obtener_datos_default(PREFIJO_TABLA . $nombre_tabla . SUFIJO_CSV))[NOMBRE_DE_TABLA];
    $sql = "DROP TABLE IF EXISTS $nombre_tabla_completo";
    $wpdb->query($sql);
}