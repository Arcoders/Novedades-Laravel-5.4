<?php

namespace App;

use Illuminate\Support\Facades\Facade;

class AlertFacade extends Facade
{

    public static function getFacadeAccessor()
    {
        return 'alert';
    }

}
