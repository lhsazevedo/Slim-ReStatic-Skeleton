<?php

namespace App\Facades
{
    use ReStatic\StaticProxy;

    class Logger extends StaticProxy
    {
        public static function getInstanceIdentifier()
        {
            return 'logger';
        }
    }
}
