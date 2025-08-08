<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Condicionales en PHP | Susana</title>
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
            <h1>Condicionales y booleanos</h1>

            <h4>Condicional simple</h4>
            <?php
                $libro = "El Principito";
                $leido = true;

                if ($leido) {
                    $mensaje = "Has leido el libro '$libro'";
                }
            ?>
            <div class="muestra">
                <b>Muestra:</b>
                <?= $mensaje ?>
            </div>
<pre><code>&lt;?php
    $libro = "El Principito";
    $leido = true;

    if ($leido) {
        $mensaje = "Has leido el libro '$libro'";
    }
    echo $mensaje;
?&gt;
</code></pre>

            <h4>Condicional doble</h4>
            <?php
                $libro = "El Principito";
                $leido = false;

                if ($leido) {
                    $mensaje = "Has leido el libro '$libro'";
                } else {
                    $mensaje = "NO has leido el libro '$libro'";
                }
            ?>
            <div class="muestra">
                <b>Muestra:</b>
                <?= $mensaje ?>
            </div>
<pre><code>&lt;?php
    $libro = "El Principito";
    $leido = false;

    if ($leido) {
        $mensaje = "Has leido el libro '$libro'";
    } else {
        $mensaje = "NO has leido el libro '$libro'";
    }
    echo $mensaje;
?&gt;
</code></pre>

            <h4>Operador ternario</h4>
            <?php
                $libro = "El Principito";
                $leido = true;

                $mensaje = ($leido === true) ? "Has leido el libro '$libro'" : "NO has leido el libro '$libro'";
            ?>
            <div class="muestra">
                <b>Muestra:</b>
                <?= $mensaje ?>
            </div>
<pre><code>&lt;?php
    $libro = "El Principito";
    $leido = true;

    $mensaje = ($leido === true) ? "Has leido el libro '$libro'" : "NO has leido el libro '$libro'";
?&gt;
</code></pre>
        </div> <!-- fin de contenedor -->
    </body>
</html>
