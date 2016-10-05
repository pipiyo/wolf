<?php
require 'Config/Config.php';
require 'vendor/autoload.php';

session_start();

use App\Routes\Routes;

$app = new Routes();
$app->on();