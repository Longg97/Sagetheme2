<?php

namespace App\Controllers\Modules;

class Solutions
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
