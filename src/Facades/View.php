<?php

namespace App\Facades
{
    use ReStatic\StaticProxy;

    class View extends StaticProxy
    {
        public static function getInstanceIdentifier()
        {
            return 'renderer';
        }
    }
}
