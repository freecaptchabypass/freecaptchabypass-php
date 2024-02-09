<?php

require(__DIR__ . '/autoloader.php');

$solver = new \FCB\Client('YOUR_FCB_API_KEY');

$solution = $solver->recaptchaV2TaskProxyless('6Le-wvkSAAAAAPBMRTvw0Q4Muexq9bi0DJwx_mJ-', 'https://www.google.com/recaptcha/api2/demo');

print_r($solution);

?>