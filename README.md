# A PHP Library for https://freecaptchabypass.com API Web Service

Example: Get Your Account Balance

> &lt;?php

> require(__DIR__ . '/autoloader.php');

> $solver = new \FCB\Client('YOUR_FCB_API_KEY');

> $solution = $solver->balance();

> print_r($solution);

> ?&gt;

Example: Solve reCAPTCHA V2 Proxy Less

> &lt;?php

> require(__DIR__ . '/autoloader.php');

> $solver = new \FCB\Client('YOUR_FCB_API_KEY');

> $solution = $solver->recaptchaV2TaskProxyless('6Le-wvkSAAAAAPBMRTvw0Q4Muexq9bi0DJwx_mJ-', 'https://www.google.com/recaptcha/api2/demo');

> print_r($solution);

> ?&gt;

Visit https://freecaptchabypass.com to get your own API key.