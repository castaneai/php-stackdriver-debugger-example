<?php

require __DIR__.'/vendor/autoload.php';

use Google\Cloud\Debugger\BreakpointStorage\FileBreakpointStorage;
use Google\Cloud\Debugger\Daemon;

$daemon = new Daemon([
    'sourceRoot' => __DIR__,
    'storage' => new FileBreakpointStorage(),
    'uniquifier' => 'php-stackdriver-debugger-example',
    'description' => 'php-stackdriver-debugger-example',
]);

return $daemon;
