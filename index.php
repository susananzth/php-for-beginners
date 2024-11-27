<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
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
    ?>
    <h1><?php echo $mensaje ?></h1>

    <?php
        $libros = [
            "El Coronel no tiene quien le escriba",
            "Juan Salvador Gaviota",
            "Manual de Carreño"
        ];
    ?>
    <h2>Libros recomendados</h2>
    <ul>
        <?php
            foreach ($libros as $libro) {
                echo "<li>{$libro}™</li>";
            }
        ?>
    </ul>
    <h2>Libros recomendados 2</h2>
    <ul>
        <?php foreach ($libros as $libro) : ?>
            <li><?= $libro ?>™</li>
        <?php endforeach; ?>
    </ul>

    <?php
        $librosAsociativos = [
            [
                "nombre" => "El Coronel no tiene quien le escriba",
                "autor" =>"Gabriel García Marquez",
                "tienda" => "https://example.com"
            ],
            [
                "nombre" => "Juan Salvador Gaviota",
                "autor" =>"Richard Bach",
                "tienda" => "https://example.com"
            ],
            [
                "nombre" => "Manual de Carreño",
                "autor" =>"Manuel Antonio Carreño",
                "tienda" => "https://example.com"
            ]
        ];
    ?>
    <h2>Libros recomendados Asociativos</h2>
    <ul>
        <?php foreach ($librosAsociativos as $libro) : ?>
            <li>
                <a href="<?= $libro["tienda"] ?>" target="_blank" rel="noopener noreferrer">
                    <?= $libro["nombre"] ?>™
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>