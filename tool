#!/usr/bin/env php
<?php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;
use Commands\MyCommand;


$app = new Application();

$app->add(new MyCommand());

$app->run();
