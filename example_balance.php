<?php

require(__DIR__ . '/autoloader.php');

$solver = new \FCB\Client('YOUR_FCB_API_KEY');

$solution = $solver->balance();

print_r($solution);

?>