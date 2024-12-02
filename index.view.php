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
    <h1><?php echo $mensaje ?></h1>

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
    <h2>Libros recomendados filtrados</h2>
    <ul>
        <?php foreach (filtrarPorAutor($librosAsociativos, "Gabriel García Marquez") as $libro) : ?>
            <li>
                <a href="<?= $libro["tienda"] ?>" target="_blank" rel="noopener noreferrer">
                    <?= $libro["nombre"] ?>™ (<?= $libro['publicacion'] ?>) - por <?= $libro['autor'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

    <h2>Libros recomendados filtrados 2</h2>
    <ul>
        <?php foreach ($librosFiltrados as $libro) : ?>
            <li>
                <a href="<?= $libro["tienda"] ?>" target="_blank" rel="noopener noreferrer">
                    <?= $libro["nombre"] ?>™ (<?= $libro['publicacion'] ?>) - por <?= $libro['autor'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
    <h2>Libros recomendados filtrados 3</h2>
    <ul>
        <?php foreach ($librosFiltrados3 as $libro) : ?>
            <li>
                <a href="<?= $libro["tienda"] ?>" target="_blank" rel="noopener noreferrer">
                    <?= $libro["nombre"] ?>™ (<?= $libro['publicacion'] ?>) - por <?= $libro['autor'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>