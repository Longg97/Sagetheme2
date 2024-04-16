<?php

namespace App\Controllers\Modules;

class Slider
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
