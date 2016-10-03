<?php
require 'Config/Config.php';
require 'vendor/autoload.php';

use App\Routes\Routes;

$app = new Routes();
$app->on();