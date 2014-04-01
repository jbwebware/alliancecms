<?php

$vendorDir = $acmsBaseDir . '/axis/vendor';

require_once $vendorDir . '/autoload.php';

use Symfony\Component\ClassLoader\ClassLoader;

$acmsLoader = new ClassLoader();

$acmsLoader->addPrefixes([
    'Acms\\Core' => $vendorDir . '/acms/src/',
    'PhpRbac' => $vendorDir . '/PhpRbac/src/',
    //'Silex' => $vendorDir . '/silex/silex/src/',
    'Home' => $acmsBaseDir . '/axis/modules/',
]);

$acmsLoader->register();

unset($acmsLoader);
unset($vendorDir);