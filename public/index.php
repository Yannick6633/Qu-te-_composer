<?php

require __DIR__.'/../vendor/autoload.php';

$Hello = new \App\Wcs\Hello();

echo $Hello->talk();


$Hello2 = new \HelloWorld\SayHello();

echo $Hello2->world();

?>