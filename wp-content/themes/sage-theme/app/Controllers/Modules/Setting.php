<?php

namespace App\Controllers\Modules;

class Setting
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
