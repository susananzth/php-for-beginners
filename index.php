<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
    <h1>Hola Mundo!!</h1>
    <h2>
        <?php
            echo "Hola Mundo";
        ?>
    </h2>
    <h2>
        <?php
            print "Hola Mundo";
        ?>
    </h2>
    <h2>
        <?php
            echo "Hola" . " Mundo";
        ?>
    </h2>
    <h3>
        <?php
            $greeting = "Aló";
            echo $greeting . " Mundo";
            echo $greeting . " " . "Mundo";
        ?>
    </h3>
    <h3>
        <?php
            $greeting = "Aló";
            echo "$greeting  Mundo";
            echo '$greeting  Mundo';
        ?>
    </h3>
</body>
</html>