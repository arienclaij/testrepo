<?php
// Laad de Composer autoloader
require 'vendor/autoload.php';

// Gebruik de Monolog namespace
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// Maak een nieuwe logger aan
$log = new Logger('my-logger');

// Voeg een handler toe (in dit geval loggen we naar een bestand)
$log->pushHandler(new StreamHandler('path/to/your.log', Logger::DEBUG));

// Voeg een logbericht toe
$log->info('Dit is een informatief bericht.');

// Test output
echo "De autoloader is geladen en Monolog is ingesteld. Controleer het logbestand voor het logbericht.";
