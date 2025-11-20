# Arreglos (Arrays) y Ciclos
Un array es una estructura de datos compuesta que permite almacenar una colección ordenada de valores bajo un único identificador de variable.

```php
<?php
  // Array indexado (lista simple)
  $libros = [
    'Cuando quiero llorar no lloro',
    'Casas Muertas',
    'Doña Bárbara'
  ];
?>
```

## Mostrar elementos de un arreglo

### Iteración (Recorrer el Array)
El bucle foreach es la estructura de control optimizada para iterar sobre arrays.
```php
<?php
  foreach ($libros as $libro) {
    // $libro representa el valor de la iteración actual
    echo $libro; 
  }
?>
```

En Vistas / HTML
```php
<ul>
  <?php 
    foreach ($libros as $libro) {
      echo "<li>".$libro."</li>";
    }
  ?>
</ul>
```

Sintaxis Alternativa (Vistas / HTML)
```php
<ul>
  <?php foreach ($libros as $libro): ?>
    <li><?= $libro ?></li>
  <?php endforeach; ?>
</ul>
```

### Índices (Zero-based Indexing)
En PHP (y la mayoría de lenguajes tipo C), los arreglos comienzan en la posición **0**.
El índice representa el desplazamiento en memoria.

Primer elemento: $array[0]
Segundo elemento: $array[1]

Así sería la lista de libros:
- [0]: Cuando quiero llorar no lloro.
- [1]: Casas Muertas.
- [2]: Doña Bárbara.

```php
<?php
  $libros = [
    'Cuando quiero llorar no lloro',
    'Casas Muertas',
    'Doña Bárbara'
  ];
?>

<span>
  <?= $libros[1] ?>
</span>
```

## Arrays asociativos(Key-Value Pairs)
Estructura de datos compuesta por pares Clave => Valor (Key-Value pairs). A diferencia de los arrays numéricos, accedemos a los valores mediante una etiqueta descriptiva (string).

Sintaxis: "clave" => "valor"
```php
<?php
  $libro = [
    'nombre' => 'Casas Muertas',  // Clave 'nombre' apunta al valor 'Casas Muertas'
    'autor'  => 'Miguel Otero Silva',
    'anio'   => 1955
  ];

  // Acceso:
  echo $libro['autor']; // Imprime: Miguel Otero Silva
?>
```

## Arreglos Multidimensionales
Un array que contiene otros arrays como elementos. Es la estructura estándar para manejar listas de objetos o registros de bases de datos.
```php
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

<ul>
  <?php foreach ($libros as $libro) : ?>
    <li>
      <a href="<?= $libro['enlaceVenta'] ?>">
        <?= $libro['nombre'] ?> &trade;
      </a>
    </li>
  <?php endforeach; ?>
</ul>
```

## Arrays asociativo y condicional
Una lista de elementos con clave valor usando filtro con condicional:
```php
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
```
