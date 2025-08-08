<?php

// Función para validar una url
function urlIs($valor) {
    return $_SERVER['REQUEST_URI'] === $valor;
}

?>
