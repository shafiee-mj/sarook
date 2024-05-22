<?php
# Made in Shia <3;
try {
    require_once '../vendor/autoload.php';
    \lemoni\sarook\app\besmellah::open();
} catch (\Throwable $e) {
    echo "<pre>";
    var_export($e);
    echo "</pre>";
}