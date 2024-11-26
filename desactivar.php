<?php

require_once(dirname(__FILE__) . "/admin/informacion_predefinida/constantes.php"); // Llamada al archivo de constantes
require_once(dirname(__FILE__) . "/admin/informacion_predefinida/asociador_de_arrays.php");

// vaciado de base de datos
function desactivar_plugin()
{
    global $wpdb;

    vaciar_tablas($wpdb);
}

function vaciar_tablas($wpdb)
{
    $tablas = TOTALIDAD_TABLAS;

    foreach ($tablas as $tabla) {
        vaciar_tabla($wpdb, $tabla);
    }
}

function vaciar_tabla($wpdb, $nombre_tabla)
{
    $nombre_tabla_completo = $wpdb->prefix . asociar(obtener_datos_default(PREFIJO_TABLA . $nombre_tabla . SUFIJO_CSV))[NOMBRE_DE_TABLA];
    $sql = "TRUNCATE TABLE $nombre_tabla_completo";
    $wpdb->query($sql);
}