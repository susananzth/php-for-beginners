<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vistas o Plantillas en PHP | Susana</title>
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
        <h1>Vistas o Plantillas</h1>
        <p>Usando vistas para separar el código PHP del código HTML.</p>

        <h4>Mostrar lista de libros filtrado por autor</h4>
        <div class="muestra">
            <b>Muestra:</b>
            <ul>
                <?php foreach ($librosFiltradosAutor as $libro) : ?>
                    <li>
                        <a href="<?= $libro['enlaceVenta'] ?>">
                            <?= $libro['nombre'] ?> (<?= $libro['año'] ?>) - De <?= $libro['autor'] ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <h4>Mostrar lista de libros filtrado por año</h4>
        <div class="muestra">
            <b>Muestra:</b>
            <ul>
                <?php foreach ($librosFiltradosAño as $libro) : ?>
                    <li>
                        <a href="<?= $libro['enlaceVenta'] ?>">
                            <?= $libro['nombre'] ?> (<?= $libro['año'] ?>) - De <?= $libro['autor'] ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</body>
</html>
