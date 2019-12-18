<?php

return [
'driver' => env('MAIL_DRIVER', 'smtp'),
'host' => env('MAIL_HOST', 'smtp.gmail.com'),
'port' => env('MAIL_PORT', 587),
'from' => ['address' => 'AuplasWebSales@gmail.com', 'name' => 'Auplas Web Sales'],
'encryption' => env('MAIL_ENCRYPTION', 'tls'),
'username' => env('MAIL_USERNAME','dexitdmc@gmail.com'),
'password' => env('MAIL_PASSWORD','anjing123'),
'sendmail' => '/usr/sbin/sendmail -bs',
'pretend' => false,
];
