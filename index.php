<?php

require 'funciones.php';

// Muestra la URL completa string(1) "/contacto?foo=%27bar%27"
$uri = $_SERVER['REQUEST_URI']; 

// parse_url separa la ruta de la cadena de consulta
/* 
parse_url($_SERVER['REQUEST_URI']);
Muestra:
array(2) {
  ["path"]=>
  string(9) "/contacto"
  ["query"]=>
  string(13) "foo=%27bar%27"
}
*/
$uri = parse_url($_SERVER['REQUEST_URI'])['path']; //string(1) "/contacto"

/* 
Enrutador antes
if ($uri === '/') {
    require 'controllers/index.php';
} elseif ($uri === '/acerca') {
    require 'controllers/acerca.php';
} elseif ($uri === '/contacto') {
    require 'controllers/contacto.php';
}*/

// Enrutador después
$rutas = [
    '/' => 'controllers/index.php',
    '/acerca' => 'controllers/acerca.php',
    '/contacto' => 'controllers/contacto.php',
];

// array_key_exists permite saber si la uri está dentro del array
if (array_key_exists($uri, $rutas)){
    require $rutas[$uri];
} else {
    http_response_code(404);

    echo "Lo siento, página no encontrada";

    die();
}

?>