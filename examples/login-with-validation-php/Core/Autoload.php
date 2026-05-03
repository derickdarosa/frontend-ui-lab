<?php
spl_autoload_register(function ($class) {
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    $file = __DIR__ . '/../app/' . $path . '.php';


    if (!file_exists($file)) {
        die("Classe não encontrada: $class em $file");
    }

    require_once $file;
});
?>