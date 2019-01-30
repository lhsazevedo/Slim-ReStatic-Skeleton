# Slim Framework 3 Skeleton Application with Facades

Use this skeleton application to quickly setup and start working on a new Slim Framework 3 application with Facades.

This skeleton application was built for Composer. This makes setting up a new Slim Framework application quick and easy.

## Install the Application

Run this command from the directory in which you want to install your new Slim Framework application.

    php composer.phar create-project lhsazevedo/slim-restatic-skeleton [my-app-name]

Replace `[my-app-name]` with the desired directory name for your new application. You'll want to:

* Point your virtual host document root to your new application's `public/` directory.
* Ensure `logs/` is web writeable.

To run the application in development, you can run these commands 

	cd [my-app-name]
	php composer.phar start

Run this command in the application directory to run the test suite

	php composer.phar test

## Create Facades

Add some dependency to `src/dependencies.php`:

```php
// database
$container['db'] = function ($c) {
	$settings = $c->get('settings')['database'];
    return new Foo\Database($settings);
};
```

Create an facade for your new dependency:

```php
// src/Facades/Db.php

namespace App\Facades
{
    use ReStatic\StaticProxy;

    class Db extends StaticProxy
    {
        public static function getInstanceIdentifier()
        {
            return 'db';
        }
    }
}
```

Use it in your controllers:

```php
Db::select('*')->from('users');
```

That's it! Now go build something cool.
