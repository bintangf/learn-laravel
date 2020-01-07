<?php

return [
'driver' => env('MAIL_DRIVER', 'smtp'),
'host' => env('MAIL_HOST', 'smtp.mailtrap.io'),
'port' => env('MAIL_PORT', 2525),
'from' => ['address' => 'AuplasWebSales@gmail.com', 'name' => 'Auplas Web Sales'],
'encryption' => env('MAIL_ENCRYPTION', 'tls'),
'username' => env('MAIL_USERNAME','a55afe928495da'),
'password' => env('MAIL_PASSWORD','75eba13300e0a7'),
'sendmail' => '/usr/sbin/sendmail -bs',
'pretend' => false,
];
