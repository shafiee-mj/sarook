<?php

namespace lemoni\sarook\app;

use lemoni\sarook\app\controllers\welcome;
use lemoni\sarook\cor\application;

class besmellah extends application
{
    public static function open()
    {
        welcome::httpIndex();
    }
}