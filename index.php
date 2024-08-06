<?php
// Use the AutoLoader
require 'vendor/autoload.php';

// GUse the Monolog namespace
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// Create a new logger
$log = new Logger('my-logger');

// Add a handler (in this case we log into a file)
$log->pushHandler(new StreamHandler('path/to/your.log', Logger::DEBUG));

// Attach a log message
$log->info('This is a message.');

// Test output
echo "The Autoloader is loaded, and the Monolog is configured. Please check the logfile.";
