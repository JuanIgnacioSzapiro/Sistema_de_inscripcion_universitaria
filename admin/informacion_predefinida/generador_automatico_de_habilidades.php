<?php
require_once(dirname(__FILE__) . "/lector_csv.php");
require_once(dirname(__FILE__) . "/redactor_de_csv.php");
require_once(dirname(__FILE__) . "/constantes.php");


/**
 * Summary of generador_automatico_de_habilidades
 * @return void
 */
function generador_automatico_de_habilidades()
{
    escribir(PREFIJO_TABLA . HABILIDADES . SUFIJO_CSV, obtener_datos_default_como_string(HABILIDADES . "_" . ROLES . SUFIJO_CSV) . "," . concatenador_con_sentencia_sql_booleana(obtener_datos(ROLES . SUFIJO_CSV), obtener_datos(HABILIDADES . SUFIJO_CSV)));
}

/**
 * Concatena con sencuencias sql
 ** exclusivamente con ";BOOL DEFAULT false,"
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