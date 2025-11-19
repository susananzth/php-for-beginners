# Introducción a PHP y Configuración del Entorno
Fecha: 19-11-2025

### Servidor de Desarrollo
PHP incluye un servidor web ligero para pruebas locales.
> **⚠️ ADVERTENCIA:** Este servidor (`built-in web server`) es exclusivamente para desarrollo local. No debe usarse en entornos de producción por razones de seguridad y rendimiento.

```bash
# Sintaxis: php -S <host>:<puerto>
php -S localhost:8080
```
* `php`: Invoca al intérprete.
* `-S`: (Server) Indica que se inicie el servidor web incorporado (Built-in web server).
* `localhost:8080`: Especifica el host y el puerto.

Para tener ayuda de los comandos de php:
```bash
php -h
```
### Etiquetas de apertura y cierre
```php
<?php ?>
```

**Bloques de Código**:
El código PHP debe estar encerrado en las etiquetas de procesamiento. Todo lo que esté fuera se interpreta como HTML plano.
```php
<?php
  // Instrucción básica de salida
  echo "Hola mundo!";
?>
```
**Punto y coma (;)**: Estrictamente obligatorio al final de cada instrucción.

### PHP y HTML
El código PHP se ejecuta en el servidor antes de enviarse al navegador. El usuario (Cliente) nunca ve el código PHP, solo recibe el HTML resultante.

Código PHP incrustado en código HTML:
```php
<!DOCTYPE html>
<html>
<head>
    <title>Demo</title>
</head>
<body>
    <h1>
        <?php echo "Hola universo :)"; ?>
    </h1>
    <p><?php echo "Esto es un parrafo"; ?></p>
</body>
</html>
```

### La convención index
Los servidores web buscan por defecto archivos llamados index.php, index.html, etc. Si el archivo se llama demo.php, se deberá ir a localhost:8080/demo.php.