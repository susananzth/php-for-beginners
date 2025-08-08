<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Variables en PHP | Susana</title>
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
            <h1>Inicio con PHP</h1>

            <h4>Iniciar servidor</h4>
            <code>php -S localhost:8080</code>

            <h4>Etiquetas de PHP</h4>
            <p>Usando etiquetas de php:</p>
<pre><code>&lt;?php
?&gt;
</code></pre>
            <p>Otra forma de usar etiquetas de php para imprimir una variable:</p>
<pre><code>&lt;?= $mensaje ?&gt;
</code></pre>

            <h4>Mostrar un texto</h4>
<pre><code>&lt;?php
    echo "Hola mundo!";
?&gt;
</code></pre>
            <div class="muestra">
                <b>Muestra:</b>
                <?php
                    echo "Hola mundo!";
                ?>
            </div>

            <h4>Contatenación en php</h4>
<pre><code>&lt;?php
    echo "Hola," . " gente!";
?&gt;
</code></pre>
            <div class="muestra">
                <b>Muestra:</b>
                <?php
                    echo "Hola," . " gente!";
                ?>
            </div>

            <h4>Uso de variables</h4>
<pre><code>&lt;?php
    $saludo = "Hola!";
    echo $saludo . " mundito!. Usando variable";
?&gt;
</code></pre>
            <div class="muestra">
                <b>Muestra:</b>
                <?php
                    $saludo = "Hola!";
                    echo $saludo . " mundito!. Usando variable";
                ?>
            </div>
<pre><code>&lt;?php
    $nombre = "Susana";
    echo "Mi nombre es $nombre";
?&gt;
</code></pre>
            <div class="muestra">
                <b>Muestra:</b>
                <?php
                    $nombre = "Susana";
                    echo "Mi nombre es $nombre";
                ?>
            </div>

            <h4>Variables super globales</h4>
            <div class="muestra">
                <b>Muestra:</b>
                <?php
                    echo 'hola, estoy mostrando una cadena de texto';

                    var_dump([
                        1, 2, 5, 54, 'Ahora estoy mostrando un arreglo'
                    ]);

                    var_dump($_SERVER);
                    //var_dump($_GET);

                    // Para interrumpir la ejecución del rograma.
                    die();

                    function dd($valor) {
                        echo '<pre>';
                        var_dump($valor);
                        echo '</pre>';
                        die();
                    }
                    dd($_GET);
                ?>
            </div>
<pre><code>&lt;?php
    echo 'hola, estoy mostrando una cadena de texto';

    var_dump([
        1, 2, 5, 54, 'Ahora estoy mostrando un arreglo'
    ]);
?&gt;
</code></pre>
            

        </div> <!-- fin de contenedor -->
    </body>
</html>
