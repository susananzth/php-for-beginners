<header class="relative bg-white shadow-sm">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900"><?= $titulo ?></h1>
    </div>
</header>

<?php 
  $nombre = "Susana";
  echo "Mi nombre es $nombre";
  echo "La variable nombre es de tipo: " . gettype($nombre);
?>