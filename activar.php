<?php
function activar_plugin()
{
    crear_tablas();

    llenar_tablas();
}
function crear_tablas()
{
    $tablas = TOTALIDAD_TABLAS;
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
    $administrador = new Administrador();
    $administrador->set_desde_array(estandarizador_de_contenido_de_tablas(USUARIO_MAESTRO));
    distribuir_subida_segun_objeto($administrador);
}

function primeros_roles()
{
}