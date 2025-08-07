<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Funciones en PHP | Susana</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/style.css" rel="stylesheet">
        <style>
            * {
                margin: 0;
                padding: 0;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            h1, h2, h3, h4, h5, h6 {
                margin-top: 0.5rem !important;
                line-height: 30px;
                margin: 0;
            }
            body {
                display:grid;
                place-items: center;
                height: 100vh;
                margin: 0;
                font-family: sans-serif;
            }
            .contenedor {
                margin: 0 auto;
                max-width: 900px;
                padding: 1rem;
                width: 100%;
            }
            ul {
                list-style-position: inside;
            }
            .muestra {
                background-color: antiquewhite;
                border: 1px grey solid;
                border-radius: 5px;
                color: brown;
                margin-bottom: 0.5rem;
                padding: 0.5rem 1rem;
            }
            code {
                background-color: rgb(67, 52, 84);
                border: 1px grey solid;
                border-radius: 5px;
                color: rgb(255, 226, 249);
                display: block;
                font-family: 'Courier New', Courier, monospace;
                padding: 0.5rem 1rem;
            }
        </style>
    </head>
    <body>
        <div class="contenedor">
            <h1>Funciones</h1>

            <h4>Uso de función</h4>
            <p>Una lista de elementos usando filtro con función:</p>
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
                    ]
                ];

                // Declarar una función con parámetros de entrada:
                function filtrarPorAutor($libros, $autor) {
                    $librosFiltrados = [];

                    foreach ($libros as $libro) {
                        if ($libro['autor'] == 'Miguel Otero Silva') {
                            $librosFiltrados[] = $libro;
                        }
                    }

                    return $librosFiltrados;
                }

                // Llamar la función:
                $librosFiltrados = filtrarPorAutor($libros, 'Miguel Otero Silva');
            ?>
            <div class="muestra">
                <b>Muestra la lista de elementos filtrada:</b>
                <ul>
                    <?php foreach (filtrarPorAutor($libros, 'Miguel Otero Silva') as $libro) : ?>
                        <li>
                            <a href="<?= $libro['enlaceVenta'] ?>">
                                <?= $libro['nombre'] ?> (<?= $libro['año'] ?>) - De <?= $libro['autor'] ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
<pre><code>&lt;?php
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
        ]
    ];

    // Declarar una función con parámetros de entrada:
    function filtrarPorAutor($libros, $autor) {
        $librosFiltrados = [];

        foreach ($libros as $libro) {
            if ($libro['autor'] == 'Miguel Otero Silva') {
                $librosFiltrados[] = $libro;
            }
        }

        return $librosFiltrados;
    }

    // Así se llama la función co los parámetros:
    $librosFiltrados = filtrarPorAutor($libros, 'Miguel Otero Silva');
?&gt;

&lt;!-- Así se muestra en el HTML --&gt;
&lt;ul&gt;
    &lt;?php foreach ($librosFiltrados as $libro) : ?&gt;
        &lt;li&gt;
            &lt;a href="&lt;?= $libro['enlaceVenta'] ?&gt;"&gt;
                &lt;?= $libro['nombre'] ?&gt; (&lt;?= $libro['año'] ?&gt;) - De &lt;?= $libro['autor'] ?&gt;
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;?php endforeach; ?&gt;
&lt;/ul&gt;
</code></pre>

            <h4>Uso de función lambda</h4>
            <p>Una lista de elementos usando filtro con varios parámetros:</p>
            <?php
                // Declarar una función con parámetros de entrada.
                // Creando una función anónima, sin nombre, también llamada función lambda.
                $filtrarPorAutor = function ($libros, $autor) {
                    $librosFiltrados = [];

                    foreach ($libros as $libro) {
                        if ($libro['autor'] == $autor) {
                            $librosFiltrados[] = $libro;
                        }
                    }

                    return $librosFiltrados;
                };

                // Llamar la función anónima y se envían lops parámetros:
                $librosFiltrados = $filtrarPorAutor($libros, 'Miguel Otero Silva');
            ?>
            <div class="muestra">
                <b>Muestra la lista de elementos filtrada:</b>
                <ul>
                    <?php foreach ($librosFiltrados as $libro) : ?>
                        <li>
                            <a href="<?= $libro['enlaceVenta'] ?>">
                                <?= $libro['nombre'] ?> (<?= $libro['año'] ?>) - De <?= $libro['autor'] ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
<pre><code>&lt;?php
    // Declarar una función con parámetros de entrada.
    // Creando una función anónima, sin nombre, también llamada función lambda.
    $filtrarPorAutor = function ($libros, $autor) {
        $librosFiltrados = [];

        foreach ($libros as $libro) {
            if ($libro['autor'] == $autor) {
                $librosFiltrados[] = $libro;
            }
        }

        return $librosFiltrados;
    };

    // Llamar la función anónima y se envían lops parámetros:
    $librosFiltrados = $filtrarPorAutor($libros, 'Miguel Otero Silva');
?&gt;

&lt;!-- Así se muestra en el HTML --&gt;
&lt;ul&gt;
    &lt;?php foreach ($librosFiltrados as $libro) : ?&gt;
        &lt;li&gt;
            &lt;a href="&lt;?= $libro['enlaceVenta'] ?&gt;"&gt;
                &lt;?= $libro['nombre'] ?&gt; (&lt;?= $libro['año'] ?&gt;) - De &lt;?= $libro['autor'] ?&gt;
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;?php endforeach; ?&gt;
&lt;/ul&gt;
</code></pre>

            <h4>Uso de función lambda con nombre</h4>
            <p>Una lista de elementos usando filtro con varios parámetros:</p>
            <?php
                // Declarar una función más genérica con parámetros de entrada.
                function filter($items, $clave, $valor) {
                    $itemsFiltrados = [];

                    foreach ($items as $item) {
                        if ($item[$clave] == $valor) {
                            $itemsFiltrados[] = $item;
                        }
                    }

                    return $itemsFiltrados;
                };

                // Llamar la función y elige los valores de filtrado:
                $librosFiltrados = filter($libros, 'autor', 'Miguel Otero Silva');
                $librosFiltrados = filter($libros, 'año', '1968');
            ?>
            <div class="muestra">
                <b>Muestra la lista de elementos filtrada:</b>
                <ul>
                    <?php foreach ($librosFiltrados as $libro) : ?>
                        <li>
                            <a href="<?= $libro['enlaceVenta'] ?>">
                                <?= $libro['nombre'] ?> (<?= $libro['año'] ?>) - De <?= $libro['autor'] ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
<pre><code>&lt;?php
    // Declarar una función más genérica con parámetros de entrada.
    function filter($items, $clave, $valor) {
        $itemsFiltrados = [];

        foreach ($items as $item) {
            if ($item[$clave] == $valor) {
                $itemsFiltrados[] = $item;
            }
        }

        return $itemsFiltrados;
    };

    // Llamar la función y elige los valores de filtrado:
    $librosFiltrados = $filter($libros, 'autor', 'Miguel Otero Silva');
    $librosFiltrados = $filter($libros, 'año', '1968');
?&gt;

&lt;!-- Así se muestra en el HTML --&gt;
&lt;ul&gt;
    &lt;?php foreach ($librosFiltrados as $libro) : ?&gt;
        &lt;li&gt;
            &lt;a href="&lt;?= $libro['enlaceVenta'] ?&gt;"&gt;
                &lt;?= $libro['nombre'] ?&gt; (&lt;?= $libro['año'] ?&gt;) - De &lt;?= $libro['autor'] ?&gt;
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;?php endforeach; ?&gt;
&lt;/ul&gt;
</code></pre>
        </div> <!-- fin de contenedor -->
    </body>
</html>
