<?php
    // string
    $nombre = "Susana";
    // Boolean
    $leido = true;

    // Condicional, pregunta:
    if ($leido) {
        $mensaje = 'Haz leido ' . '"' . $nombre . '"';
    } else {
        $mensaje = 'No haz leido ' . '"' . $nombre . '"';
    }

    $libros = [
        "El Coronel no tiene quien le escriba",
        "Juan Salvador Gaviota",
        "Manual de Carreño"
    ];
    $librosAsociativos = [
        [
            "nombre" => "El Coronel no tiene quien le escriba",
            "autor" =>"Gabriel García Marquez",
            "publicacion" => 1961,
            "tienda" => "https://example.com"
        ],
        [
            "nombre" => "Juan Salvador Gaviota",
            "autor" =>"Richard Bach",
            "publicacion" => 1970,
            "tienda" => "https://example.com"
        ],
        [
            "nombre" => "Manual de Carreño",
            "autor" =>"Manuel Antonio Carreño",
            "publicacion" => 1853,
            "tienda" => "https://example.com"
        ]
    ];

    function filtrarPorAutor($libros, $autor) {
        $librosFiltrados = [];
        foreach ($libros as $libro) {
            if ($libro["autor"] == $autor) {
                $librosFiltrados[] = $libro;
            }
        }
        return $librosFiltrados;
    }

    function filtro($elementos, $llave, $valor) {
        $elementosFiltrados = [];
        foreach ($elementos as $elemento) {
            if ($elemento[$llave] == $valor) {
                $elementosFiltrados[] = $elemento;
            }
        }
        return $elementosFiltrados;
    }
    function filtro2($elementos, $function) {
        $elementosFiltrados = [];
        foreach ($elementos as $elemento) {
            if ($function($elemento)) {
                $elementosFiltrados[] = $elemento;
            }
        }
        return $elementosFiltrados;
    }

    $librosFiltrados = filtro($librosAsociativos, 'publicacion', 1853);
    // Si quiero filtrar usando un >= puedo reescribir la función de esta forma
    $librosFiltrados3 = filtro2($librosAsociativos, function ($libro) {
        return $libro['publicacion'] >= 1950;
    });

    $negocio = [
        'nombreCurso' => 'Laracast',
        'costo' => 15,
        'categorias' = 'Testing', 'PHP', 'Javascript'
    ];

    foreach ($negocio['categorias'] as $categoria) {
        return $categoria;
    }

    require "index.view.php";