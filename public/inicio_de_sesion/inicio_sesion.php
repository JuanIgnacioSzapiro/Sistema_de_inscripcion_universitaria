<?php
function mi_indice()
{
    ob_start();

    include_once dirname(__FILE__) . "/../../admin/informacion_predefinida/lector_csv.php";

    return ob_get_clean();
    //Al usar ob_start() para capturar la salida, es común ver ob_end_clean() o ob_end_flush() al final de la función, pero en este caso, no es estrictamente necesario. Esto es porque la función ob_get_clean() ya actúa como un reemplazo directo de ob_end_clean(), es decir, cierra el búfer de salida y devuelve su contenido en una sola llamada.
}
add_shortcode('mi_indice_shotcode', 'mi_indice');
