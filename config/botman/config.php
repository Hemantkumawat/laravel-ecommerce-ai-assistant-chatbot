<?php
return [
    'conversation_cache_time' => 40,
    'user_cache_time' => 30,
    'use_database' => true,
    'database' => [
        'driver' => 'sqlite',
        'database' => __DIR__ . '/database.sqlite',
        'table' => 'botman',
    ],
    'middleware' => [
        // App\Http\Middleware\BotMiddleware::class,
    ],
    'botman' => [
        'hipchat_urls' => [
            'YOUR-INTEGRATION-URL-1',
            'YOUR-INTEGRATION-URL-2',
        ],
    ],
    'wechat' => [
        'app_id' => 'YOUR-WECHAT-APP-ID',
        'secret' => 'YOUR-WECHAT-SECRET',
        'token' => 'YOUR-WECHAT-TOKEN',
        'aes_key' => 'YOUR-WECHAT-AES-KEY',
    ],
    'telegram' => [
        'token' => 'YOUR-TELEGRAM-TOKEN',
    ],
    'facebook' => [
        'token' => 'YOUR-FACEBOOK-TOKEN',
        'app_secret' => 'YOUR-FACEBOOK-APP-SECRET',
        'verification' => 'YOUR-FACEBOOK-VERIFICATION',
    ],
    'slack' => [
        'token' => 'YOUR-SLACK-TOKEN',
    ],
    'twilio' => [
        'sid' => 'YOUR-TWILIO-SID',
        'token' => 'YOUR-TWILIO-TOKEN',
        'from' => 'YOUR-TWILIO-FROM-NUMBER',
    ],
    'nexmo' => [
        'key' => 'YOUR-NEXMO-KEY',
        'secret' => 'YOUR-NEXMO-SECRET',
        'sms_from' => 'YOUR-NEXMO-SMS-FROM-NUMBER',
    ],
    'web' => [
        'matchingData' => [
            'driver' => 'web',
        ],
    ],
    'hipchat' => [
        'token' => 'YOUR-HIPCHAT-TOKEN',
    ],
    'microsoft_bot_framework' => [
        'app_id' => 'YOUR-MICROSOFT-APP-ID',
        'app_key' => 'YOUR-MICROSOFT-APP-KEY',
    ],
    'botframework' => [
        'app_id' => 'YOUR-MICROSOFT-APP-ID',
        'app_key' => 'YOUR-MICROSOFT-APP-KEY',
    ],
];
