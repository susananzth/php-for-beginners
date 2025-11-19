# Variables en PHP

### Concatenación
Combinar y unificar cadenas de texto.
Operación para unir dos o más cadenas de texto.
A diferencia de JS o Python (que usan `+`), PHP utiliza el punto (`.`).
```php
<?php 
  echo "Hola" . " mundo!";
?>
```

### Variables
Caja que guarda un valor en memoria para ser utilzado más adelante. 
Se escribe con el símbolo de `$` y luego el nombre de la variable:

#### Interpolación vs. Literales (Comillas Simples vs. Dobles)
**Comillas Dobles (" ")**: Permiten la Interpolación de Variables. El intérprete de PHP analiza la cadena, busca variables (que empiezan por $) y las reemplaza por su valor.

```php
<?php 
  $nombre = "Susana";
  echo "Mi nombre es $nombre"; // Imprime: Mi nombre es Susana
?>
```

**Comillas Simples (' ')**: Tratan todo el contenido como un Literal. No se evalúa nada dentro.
```php
<?php 
  $nombre = "Susana";
  echo 'Mi nombre es $nombre'; // Imprime: Mi nombre es $nombre
?>
```

#### Variable Tipo texto

```php
<?php 
  $saludo = "Hola!";
  echo $saludo . " mundito!. Usando variable";
?>
```

Usando comillas dobles ("") en la cadena de texto, se puede imprimir la variable concatenada al texto
```php
<?php 
  $nombre = "Susana";
  echo "Mi nombre es $nombre";
?>
```

Otra forma de usar etiquetas de php para imprimir una variable:
```php
<?= $mensaje ?>
```

#### Variable booleano
Tipo de dato que solo puede ser verdadero (`true`) o falso (`false`).
Mayormente usado para [condicionales](condicionales.md)

```php
<?php 
  $leido = true; // or false
?>
```



// Más adelante incluyo otros tipos de variables.