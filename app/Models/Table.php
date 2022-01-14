<?php

namespace App\Models;

class Table
{
    private static $tables = [
        'Table 1',
        'Table 2'
    ];

    public static function all()
    {
        return collect(self::$tables);
    }
}
