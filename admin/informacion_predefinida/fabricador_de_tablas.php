<?php
require_once(dirname(__FILE__) . "/asociador_de_arrays.php");

/**
 * Fabrica arrays asociados con la informacion de los csv para el encabezado de las tablas
 * @param mixed $nombre_tabla
 * @return array
 */
function fabricador_de_tablas($nombre_tabla)
{
    $array_asociado = [];
    $array_asociado_final = [];
    if ($nombre_tabla == HABILIDADES) {
        $array_asociado = asociar(obtener_datos_default(PREFIJO_TABLA . $nombre_tabla . SUFIJO_CSV));
        $array_asociado_final = array_merge($array_asociado, fabricador_de_habilidades());
    } else {
        $array_asociado_final = asociar(obtener_datos_default(PREFIJO_TABLA . $nombre_tabla . SUFIJO_CSV));
    }
    return $array_asociado_final;
}

/**
 * Fabrica un unico array de multiples csv. Convina los prefijos de las habilidades por cada rol
 * * UNICAMENTE SIRVE PARA LA TABLA DE HABILIDADES
 * @return array
 */
function fabricador_de_habilidades()
{
    $cadena = [];
    foreach (explode(",", concatenador_con_sentencia_sql_booleana(obtener_datos_default(ROLES . SUFIJO_CSV), obtener_datos(HABILIDADES . SUFIJO_CSV))) as $valores) {
        $cadena = array_merge($cadena, asociar(explode(";", $valores)));

    }
    return $cadena;
}

/**
 * Fabrica arrays asociados con la informacion de los csv para el contenido de las tablas
 * @return array
 */
function fabricador_de_usuario_maestro($nombre_tabla)
{
    return asociar(obtener_datos_default($nombre_tabla . SUFIJO_CSV));
}

/**
 * Concatena con sencuencias sql
 * * exclusivamente con ";BOOL DEFAULT false,"
 * @param mixed $roles
 * @param mixed $habilidades
 * @return string
 */
function concatenador_con_sentencia_sql_booleana($roles, $habilidades)
{
    return str_replace(",", ";BOOL DEFAULT false,", separar_array(",", concatenador_de_habilidades_y_roles($roles, $habilidades))) . ";BOOL DEFAULT false";
}

/**
 * Concatena con un guion medio los roles y bailidades segun corresponda
 * @param mixed $roles
 * @param mixed $habilidades
 * @return array
 */
function concatenador_de_habilidades_y_roles($roles, $habilidades)
{
    $datos = [];
    foreach ($roles as $rol) {
        foreach ($habilidades as $habilidad) {
            array_push($datos, [$habilidad . "_" . $rol]);
        }
    }
    return $datos;
}

/**
 * separa 
 * @param mixed $separador
 * @param mixed $datos
 * @return string
 */
function separar_array($separador, $datos)
{
    $cadena = "";
    foreach ($datos as $key => $dato) {
        if ($key < count($datos) - 1) {
            $cadena .= $dato[0] . $separador;
        } else {
            $cadena .= $dato[0];
        }
    }
    return $cadena;
}
