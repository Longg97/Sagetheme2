<?php

namespace App\Controllers\Modules;

class Section2
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
