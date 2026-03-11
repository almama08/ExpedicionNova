<?php
spl_autoload_register(function ($clase) {
    $directorios = [
        'models/',
        'controllers/'
    ];
    foreach ($directorios as $directorio) {
        $archivo = __DIR__ . '/' . $directorio . $clase . '.php';
        
        if (file_exists($archivo)) {
            require_once $archivo;
            return;
        }
    }
});
?>