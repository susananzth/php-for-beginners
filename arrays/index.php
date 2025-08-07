<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Arrays y Bucles en PHP | Susana</title>
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
            <h1>Arrays y Bucles</h1>

            <h4>Lista de libros simple</h4>
            <ul>
                <li>Cuando quiero llorar no lloro &trade;</li>
                <li>Casas Muertas &trade;</li>
                <li>Doña Bárbara &trade;</li>
            </ul>
            <?php
                // Declara un array, una lista de cadenas de texto:
                $libros = [
                    'Cuando quiero llorar no lloro',
                    'Casas Muertas',
                    'Doña Bárbara'

                ];
            ?>
            <div class="muestra">
                <b>Muestra:</b>
                <ul>
                    <?php 
                        // Utilizo un bucle para recorrer cada elemento dentro del array:
                        foreach ($libros as $libro) {
                            echo "<li>".$libro." &trade;</li>";
                        }
                    ?>
                </ul>
            </div>
<pre><code>&lt;?php
    // Declara un array, una lista de cadenas de texto:
    $libros = [
        'Cuando quiero llorar no lloro',
        'Casas Muertas',
        'Doña Bárbara'

    ];

    // Otra forma de declarar un array:
    $libros = array(
        'Cuando quiero llorar no lloro',
        'Casas Muertas',
        'Doña Bárbara'
    );

    // Utilizo un bucle para recorrer cada elemento dentro del array:
    foreach ($libros as $libro) {
        echo $libro . " &trade;";
    }
?&gt;

&lt;!-- Así se muestra en el HTML --&gt;
&lt;ul&gt;
    &lt;?php foreach ($libros as $libro) {
        echo "&lt;li&gt;".$libro." &trade;&lt;/li&gt;";
    }
    ?&gt;
&lt;/ul&gt;
</code></pre>
            <p>Otra forma de mostrar un bucle en HTML</p>
            <div class="muestra">
                <b>Muestra:</b>
                <ul>
                    <?php foreach ($libros as $libro) : ?>
                        <li><?= $libro ?> &trade;</li>
                    <?php endforeach; ?>
                </ul>
            </div>
<pre><code>&lt;ul&gt;
    &lt;?php foreach ($libros as $libro) : ?&gt;
        &lt;li&gt;&lt;?= $libro ?&gt; &trade;&lt;/li&gt;
    &lt;?php endforeach; ?&gt;
&lt;/ul&gt;
</code></pre>

            <h4>Índices en array</h4>
            <p>El íncide es la posición que tiene el elemento en el array y comienza desde la posición cero (0).</p>
            <ul>
                <li>[0]: Cuando quiero llorar no lloro &trade;</li>
                <li>[1]: Casas Muertas &trade;</li>
                <li>[2]: Doña Bárbara &trade;</li>
            </ul>
            <?php
                // Declara un array, una lista de cadenas de texto:
                $libros = [
                    'Cuando quiero llorar no lloro',
                    'Casas Muertas',
                    'Doña Bárbara'

                ];
            ?>
            <div class="muestra">
                <b>Muestra el segundo elemento de la lista:</b>
                <ul>
                    <?= $libros[1] ?>
                </ul>
            </div>
<pre><code>&lt;?php
    // Mostrar un elemento del array indicando su índice:
    $libros = [
        'Cuando quiero llorar no lloro',
        'Casas Muertas',
        'Doña Bárbara'

    ];

    echo $libros[1];
?&gt;

&lt;!-- Así se muestra en el HTML --&gt;
&lt;?= $libros[1] ?&gt;
</code></pre>
            <h4>Arrays asociativos</h4>
            <p>Una lista de elementos con clave valor:</p>
            <?php
                $libros = [
                    [
                        'nombre' => 'Cuando quiero llorar no lloro',
                        'autor' => 'Miguel Otero Silva',
                        'enlaceVenta' => 'https://ejemplo.com'
                    ],
                    [
                        'nombre' => 'Casas Muertas',
                        'autor' => 'Miguel Otero Silva',
                        'enlaceVenta' => 'https://ejemplo.com'
                    ],
                    [
                        'nombre' => 'Doña Bárbara',
                        'autor' => 'Rómulo Gallegos',
                        'enlaceVenta' => 'https://ejemplo.com'
                    ]
                ];
            ?>
            <div class="muestra">
                <b>Muestra la lista de elementos llamando la clave:</b>
                <ul>
                    <?php foreach ($libros as $libro) : ?>
                        <li>
                            <a href="<?= $libro['enlaceVenta'] ?>">
                                <?= $libro['nombre'] ?> &trade;
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
<pre><code>&lt;?php
    // Mostrar un elemento del array indicando su clave valor:
    $libros = [
        [
            'nombre' => 'Cuando quiero llorar no lloro',
            'autor' => 'Miguel Otero Silva',
            'enlaceVenta' => 'https://ejemplo.com'
        ],
        [
            'nombre' => 'Casas Muertas',
            'autor' => 'Miguel Otero Silva',
            'enlaceVenta' => 'https://ejemplo.com'
        ],
        [
            'nombre' => 'Doña Bárbara',
            'autor' => 'Rómulo Gallegos',
            'enlaceVenta' => 'https://ejemplo.com'
        ]
    ];
?&gt;

&lt;!-- Así se muestra en el HTML --&gt;
&lt;ul&gt;
    &lt;?php foreach ($libros as $libro) : ?&gt;
        &lt;li&gt;
            &lt;a href="&lt;?= $libro['enlaceVenta'] ?&gt;"&gt;
                &lt;?= $libro['nombre'] ?&gt; &trade;
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;?php endforeach; ?&gt;
&lt;/ul&gt;
</code></pre>

            <h4>Arrays asociativo y condicional</h4>
            <p>Una lista de elementos con clave valor usando filtro con condicional:</p>
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
            ?>
            <div class="muestra">
                <b>Muestra la lista de elementos filtrada:</b>
                <ul>
                    <?php foreach ($libros as $libro) : ?>
                        <?php if ($libro['autor'] == 'Miguel Otero Silva') : ?>
                            <li>
                                <a href="<?= $libro['enlaceVenta'] ?>">
                                    <?= $libro['nombre'] ?> (<?= $libro['año'] ?>) - De <?= $libro['autor'] ?>
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </div>
<pre><code>&lt;?php
    // Mostrar un elemento del array indicando su clave valor:
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
?&gt;

&lt;!-- Así se muestra en el HTML --&gt;
&lt;ul&gt;
    &lt;?php foreach ($libros as $libro) : ?&gt;
        &lt;?php if ($libro['autor'] == 'Miguel Otero Silva') : ?&gt;
            &lt;li&gt;
                &lt;a href="&lt;?= $libro['enlaceVenta'] ?&gt;"&gt;
                    &lt;?= $libro['nombre'] ?&gt; (&lt;?= $libro['año'] ?&gt;) - De &lt;?= $libro['autor'] ?&gt;
                &lt;/a&gt;
            &lt;/li&gt;
        &lt;?php endif; ?&gt;
    &lt;?php endforeach; ?&gt;
&lt;/ul&gt;
</code></pre>
        </div> <!-- fin de contenedor -->
    </body>
</html>
