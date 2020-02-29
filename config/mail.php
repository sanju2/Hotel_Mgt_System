<?php


return [

   
    'driver' => env('MAIL_DRIVER', 'smtp'),

    'host' => env('MAIL_HOST', 'smtp.mailgun.org'),
		
    'port' => env('MAIL_PORT', 587),

    

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'greenmount049@gmail.com'),
        'name' => env('MAIL_FROM_NAME', 'greenmount'),
    ],

    

    'encryption' => env('MAIL_ENCRYPTION', 'tls'),

    

    'username' => env('MAIL_USERNAME'),

    'password' => env('MAIL_PASSWORD'),

    
    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],

];
