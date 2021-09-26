<?php

function __autoload(string $className): void
{
    $extensions = ['.php'];
    $sep = DIRECTORY_SEPARATOR;

    $folders = [
        'builders' . $sep,
        'entities' . $sep,
        'entities' . $sep . 'types' . $sep,
    ];

    foreach ($folders as $folder) {
        foreach ($extensions as $extension) {
            $path = $folder . $sep . $className . $extension;

            if ($folder == '') {
                $path = $folder . $className . $extension;
            }

            if (is_readable($path)) {
                include_once $path;
            }
        }
    }
}
