<?php
require_once(dirname(__FILE__) . "/../modelos/administrador_modelo.php");

function agregar_a_base_de_datos($objeto, $nombre_tabla)
{
    global $wpdb;

    espiar("administrador_controlador->objeto", $objeto);

    // Nombre de la tabla (ajusta 'tu_tabla' al nombre real de tu tabla)
    $tabla = $wpdb->prefix . $nombre_tabla . SUFIJO_INSPT;

    // Insertar los datos en la base de datos
    $wpdb->insert($tabla, $objeto->get_como_array());
}