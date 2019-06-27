<?php
require __DIR__.'/vendor/autoload.php';

use Google\Cloud\Debugger\Agent;
use Google\Cloud\Debugger\BreakpointStorage\FileBreakpointStorage;

$agent = new Agent([
    'storage' => new FileBreakpointStorage(),
]);

echo 'hello, world';
