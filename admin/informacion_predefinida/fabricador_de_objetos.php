<?php
function fabricador_de_objetos($informacion_de_objeto, $tipo_de_objeto)
{
    $nuevo_objeto = new $tipo_de_objeto;

    $nuevo_objeto->set_desde_array($informacion_de_objeto);

    return $nuevo_objeto;
}