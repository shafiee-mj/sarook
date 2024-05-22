<?php

namespace lemoni\sarook\cmd;
class update
{
    public static function post()
    {
        fwrite(fopen(dirname(__DIR__, 2) . '/a.txt', 'w+'), '123');
    }
}