#!/usr/bin/env php
<?php

// set to run indefinitely if needed
set_time_limit(0);

require __DIR__ . '/vendor/autoload.php';

use ManuelHe\Command\ConsolePainter;
use Symfony\Component\Console\Application;

$application = new Application();
$application->add(new ConsolePainter);
$application->run();
