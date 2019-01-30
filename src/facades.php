<?php

use ReStatic\ProxyManager;

$proxyManager = new ProxyManager($app->getContainer());
$proxyManager->addProxy('View', 'App\Facades\View');
$proxyManager->addProxy('Logger', 'App\Facades\Logger');
$proxyManager->enable(ProxyManager::ROOT_NAMESPACE_ANY);
