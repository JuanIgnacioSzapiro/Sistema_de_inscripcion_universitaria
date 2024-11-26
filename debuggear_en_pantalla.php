<?php

function espiar($texto, $valor)
{
    error_log($texto . ": " . print_r($valor, true));
    return $valor;
}