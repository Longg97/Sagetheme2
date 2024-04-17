<?php

namespace App\Controllers\Modules;

class HomeBanner
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
