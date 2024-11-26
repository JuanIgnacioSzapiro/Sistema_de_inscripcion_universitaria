<?php
require_once(dirname(__FILE__) . "/administrador_controlador.php");
function distribuir_subida_segun_objeto($objeto)
{
    //espiar("subir_objeto", $objeto);
    switch (get_class($objeto)) {
        case ADMINISTRADOR: {
            agregar_a_base_de_datos($objeto, USUARIOS);
        }
    }
}