<?php

// Función para validar una url
function esLaUrl($valor) {
    return parse_url($_SERVER['REQUEST_URI'])['path'] === $valor;
}

function dd($valor) {
    echo '<pre>';
    var_dump($valor);
    echo '</pre>';
    die();
}

?>
