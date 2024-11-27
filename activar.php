<?php
require_once(dirname(__FILE__) . "/admin/informacion_predefinida/constantes.php");
require_once(dirname(__FILE__) . "/admin/informacion_predefinida/generador_de_tablas.php");
require_once(dirname(__FILE__) . "/admin/informacion_predefinida/estandarizador_de_informacion_de_tablas.php");
require_once(dirname(__FILE__) . "/admin/informacion_predefinida/generador_automatico_de_habilidades.php");
require_once(dirname(__FILE__) . "/admin/informacion_predefinida/fabricador_de_objetos.php");

require_once(dirname(__FILE__) . "/admin/modelos/administrador_modelo.php");
require_once(dirname(__FILE__) . "/admin/modelos/rol_modelo.php");

require_once(dirname(__FILE__) . "/admin/controladores/subir_objeto.php");



function activar_plugin()
{
    crear_tablas();

    llenar_tablas();
}
function crear_tablas()
{
    $tablas = TOTALIDAD_TABLAS;
    generador_automatico_de_habilidades();
    foreach ($tablas as $tabla) {
        activar_tabla(generar_sql_de_array_asociado(estandarizador_de_tablas($tabla)));
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
    distribuir_subida_segun_objeto(fabricador_de_objetos(estandarizador_de_contenido_de_tablas_asociable(USUARIO_MAESTRO), new Administrador()));
}

function primeros_roles()
{
    foreach (estandarizador_de_contenido_de_tablas_NO_asociable(ROLES) as $rol_info) {
        distribuir_subida_segun_objeto(fabricador_de_objetos(array(NOMBRE_DE_ROL => $rol_info), new Rol()));
    }

}