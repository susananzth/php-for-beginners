# Estructuras de Control: Condicionales

Las estructuras de control permiten alterar el flujo de ejecución del programa basándose en evaluaciones lógicas (Booleanas).

## Condicional simple y doble
### If / Else (Si / Si no)
Permite crear una bifurcación lógica. Si la condición se evalúa como `true`, ejecuta el primer bloque; de lo contrario, ejecuta el `else` (opcional).

**Buenas Prácticas**: Inicialización y Scope
> **⚠️ Error Común:** Si defines una variable *dentro* de un bloque condicional y la condición no se cumple, la variable no existirá fuera del bloque, generando un warning: `Undefined variable`.

**Solución (Programación Defensiva):** Inicializar la variable con un valor por defecto antes de la lógica.
```php
<?php 
  $libro = "El Principito";
  $leido = false;
  
  // Inicialización por defecto (Evita errores si no entra al if)
  $mensaje = ""; 

  if ($leido) {
    $mensaje = "Has leído el libro '$libro'";
  } else {
    $mensaje = "NO has leído el libro '$libro'";
  }
?>

<h1>
  <?= $mensaje ?>
</h1>
```
### Operador ternario
Es una forma abreviada de un `if/else` en una sola línea. Ideal para asignaciones simples.

```php
<?php 
  $libro = "El Principito";
  $leido = true;

  // NO es necesario poner ($leido === true), la variable se evalúa sola.
  $mensaje = $leido 
    ? "Has leído '$libro'" 
    : "Aún no lees '$libro'";
      
  echo $mensaje;
?>
```
