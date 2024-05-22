<?php

namespace lemoni\sarook\cmd;
class update
{
    public static function post()
    {
        echo "------------------\n";
        echo "------------------\n";
        echo "update start\n";
        fwrite(fopen(dirname(__DIR__, 2) . '/a.txt', 'w+'), '123');
        echo "update end\n";
        echo "------------------\n";
    }
}