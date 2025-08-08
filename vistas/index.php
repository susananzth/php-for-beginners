<?php
    $libros = [
        [
            'nombre' => 'Cuando quiero llorar no lloro',
            'autor' => 'Miguel Otero Silva',
            'año' => 1970,
            'enlaceVenta' => 'https://ejemplo.com'
        ],
        [
            'nombre' => 'Casas Muertas',
            'autor' => 'Miguel Otero Silva',
            'año' => 1955,
            'enlaceVenta' => 'https://ejemplo.com'
        ],
        [
            'nombre' => 'Piedra de Mar',
            'autor' => 'Francisco Massiani',
            'año' => 1968,
            'enlaceVenta' => 'https://ejemplo.com'
        ],
        [
            'nombre' => 'Doña Bárbara',
            'autor' => 'Rómulo Gallegos',
            'año' => 1929,
            'enlaceVenta' => 'https://ejemplo.com'
        ],
        [
            'nombre' => 'Las lanzas coloradas',
            'autor' => 'Arturo Uslar Pietri',
            'año' => 1931,
            'enlaceVenta' => 'https://ejemplo.com'
        ],
        [
            'nombre' => 'Memorias de Mamá Blanca',
            'autor' => 'Teresa de la Parra',
            'año' => 1929,
            'enlaceVenta' => 'https://ejemplo.com'
        ]
    ];

    function filtro($items, $clave, $valor) {
        $itemsFiltrados = [];

        foreach ($items as $item) {
            if ($item[$clave] == $valor) {
                $itemsFiltrados[] = $item;
            }
        }

        return $itemsFiltrados;
    };

    // Llamar la función y elige los valores de filtrado:
    $librosFiltradosAutor = filtro($libros, 'autor', 'Teresa de la Parra');
    $librosFiltradosAño = filtro($libros, 'año', '1968');

    require "index.view.php";
