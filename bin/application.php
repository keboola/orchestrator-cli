#!/usr/bin/env php
<?php
// application.php
$autoloadPath =  __DIR__ . '/../vendor/autoload.php';
if (!file_exists($autoloadPath)) {
         echo 'You must set up the project dependencies, run the following commands:'.PHP_EOL.
            'curl -sS https://getcomposer.org/installer | php'.PHP_EOL.
            'php composer.phar install'.PHP_EOL;
        exit(1);
}

require_once($autoloadPath);

use Keboola\Orchestrator\Command\RunSync;
use Symfony\Component\Console\Application;

$application = new Application();
$application->add(new RunSync);
$application->run();