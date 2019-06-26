<?php
require __DIR__.'/vendor/autoload.php';

use Google\Cloud\Debugger\Agent;
use Google\Cloud\Debugger\DebuggerClient;

$agent = new Agent(['sourceRoot' => realpath('/src')]);

$debugger = new DebuggerClient();
$debuggee = $debugger->debuggee('testtesttest');
$debuggee->register();

echo 'hello, world';
