<?php

namespace App\Controllers\Modules;

class TheLastest
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
