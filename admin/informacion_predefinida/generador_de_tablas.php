<?php
require_once(dirname(__FILE__) . "/../../debuggear_en_pantalla.php");
function generar_sql_de_array_asociado($array_asociado)
{
    global $wpdb;

    //nombre de la tabla con el prefijo
    $sql = "CREATE TABLE IF NOT EXISTS " . $wpdb->prefix . $array_asociado[NOMBRE_DE_TABLA] . "(\n";

    foreach ($array_asociado as $nombre_de_columna => $tipo) {
        if ($nombre_de_columna != NOMBRE_DE_TABLA) {
            $sql .= $nombre_de_columna . " " . $tipo . ",\n";
        }
    }

    $sql .= "PRIMARY KEY (id))";

    $charset_collate = $wpdb->get_charset_collate();
    $sql .= " $charset_collate;";

    return $sql;
}