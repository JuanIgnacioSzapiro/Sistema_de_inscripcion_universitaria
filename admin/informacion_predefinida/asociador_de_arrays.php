<?php
/**
 * Asocia los valores de un array con los nombres de las keys
 * @param mixed $valores_separados ejemplo: (array) [0] => (string) nombre_de_usuario;admin ; [1] => (string) clave;admin
 * @return array ejemplo: [nombre_de_usuario] => admin; [clave] => admin
 */
function asociar($valores_separados)
{
    $datos = [];
    $contador = 0;
    $mas_uno = 0;
    for ($contador = 0; $contador <= count($valores_separados) - 2; $contador += 2) {
        $mas_uno = $contador + 1;
        $datos += [$valores_separados[$contador] => $valores_separados[$mas_uno]];
    }
    return $datos;
}