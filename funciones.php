<?php

// Función para validar una url
function urlIs($valor) {
    return parse_url($_SERVER['REQUEST_URI'])['path'] === $valor;
}

?>
