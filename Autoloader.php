<?php

function customAutoload(string $classN)
{
    $path = str_replace('Car\\', DIRECTORY_SEPARATOR, $classN);
    require_once __DIR__ . "$path.php";
}

spl_autoload_register('customAutoload');

$mycar = new \Car\Car("asf");
$chaser = new \Car\Chaser();

echo $mycar->getModel();
echo "<p>";
echo $chaser->getModel();
