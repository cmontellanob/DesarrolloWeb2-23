<?php
function PalabraMasLarga($cadena)
{
    $palabras = explode(" ", $cadena);
    $palabraMasLarga = "";
    foreach ($palabras as $palabra) {
        if (strlen($palabra) > strlen($palabraMasLarga)) {
            $palabraMasLarga = $palabra;
        }
    }
    return $palabraMasLarga;
}