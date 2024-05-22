<?php

namespace Lemoni\Sarook;
class cmd
{
    public static function post_update()
    {
        self::post_install();;
    }

    public static function post_install()
    {
        $target_dir = __DIR__ . '/target';
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        $filePath = $target_dir . '/example.txt';
        file_put_contents($filePath, 'This is an example file.');

        echo "---------------------------.\n";
        echo "---------------------------.\n";
        echo "---------------------------.\n";
        echo "Files have been created successfully.\n";

    }
}