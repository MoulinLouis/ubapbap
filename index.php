<?php

namespace App;

use App\Core\Autoloader;
use App\Core\Framework;

require "Core/Autoloader.php";
Autoloader::register();

// require "vendor/autoload.php";

$app = new Framework();
$app->run();

?>