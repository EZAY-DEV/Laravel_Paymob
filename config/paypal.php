<?php

return [
    'client_id' => env('PAYPAL_SANDBOX_CLIENT_ID', ''),
    'secret' => env('PAYPAL_SANDBOX_CLIENT_SECRET', ''),
    'settings' => array(
        'mode' =>  env('PAYPAL_MODE', 'sandbox'),
        'http.ConnectionTimeOut' => 1000,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'FINE'
    ),
];

