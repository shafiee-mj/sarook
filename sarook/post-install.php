<?php
$target_dir = __DIR__ . '/target';

if (!is_dir($target_dir)) {
    mkdir($target_dir, 0777, true);
}

$filePath = $target_dir . '/example.txt';
file_put_contents($filePath, 'This is an example file.');

echo "Files have been created successfully.\n";
