<?php
require_once(dirname(__FILE__) . "/admin/informacion_predefinida/generador_de_tablas.php");
require_once(dirname(__FILE__) . "/admin/informacion_predefinida/lector_csv.php");
require_once(dirname(__FILE__) . "/admin/informacion_predefinida/constantes.php"); // Llamada al archivo de constantes

require_once(dirname(__FILE__) . "/admin/modelos/administrador_modelo.php");
require_once(dirname(__FILE__) . "/admin/modelos/rol_modelo.php");
require_once(dirname(__FILE__) . "/admin/controladores/subir_objeto.php");

require_once(dirname(__FILE__) . "/admin/informacion_predefinida/fabricador_de_tablas.php");

function activar_plugin()
{
    crear_tablas();

    llenar_tablas();
}
function crear_tablas()
{
    $tablas = TOTALIDAD_TABLAS;
    foreach ($tablas as $tabla) {
        activar_tabla(generar_sql_de_array_asociado(fabricador_de_tablas($tabla)));
    }
}

function activar_tabla($sql)
{
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

function llenar_tablas()
{
    primer_usuario();
    primeros_roles();
}

function primer_usuario()
{
    $administrador = new Administrador();
    $administrador->set_desde_array(fabricador_de_usuario_maestro(USUARIO_MAESTRO));
    distribuir_subida_segun_objeto($administrador);
}

function primeros_roles()
{
}