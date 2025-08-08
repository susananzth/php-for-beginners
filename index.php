<?php

require 'funciones.php';

$uri = $_SERVER['REQUEST_URI'];
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

if ($uri === '/') {
    require 'controllers/index.php';
} elseif ($uri === '/acerca') {
    require 'controllers/acerca.php';
} elseif ($uri === '/contacto') {
    require 'controllers/contacto.php';
}

?>