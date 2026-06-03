<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'postmark' => [
        'key' => env('POSTMARK_API_KEY'),
    ],

    'resend' => [
        'key' => env('RESEND_API_KEY'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

    'sub2api' => [
        'base_url' => env('UPSTREAM_BASE_URL'),
        'api_key' => env('UPSTREAM_API_KEY'),
        'image_model' => env('UPSTREAM_IMAGE_MODEL', 'gpt-image-1'),
        'text_model' => env('UPSTREAM_TEXT_MODEL', 'gpt-4o-mini'),
        'timeout' => (int) env('UPSTREAM_TIMEOUT', 120),
        'image_concurrency_per_user' => (int) env('IMAGE_CONCURRENCY_PER_USER', 2),
    ],

    'zpay' => [
        'pid' => env('ZPAY_PID'),
        'key' => env('ZPAY_KEY'),
        'api_base' => env('ZPAY_API_BASE', 'https://z-pay.cn'),
        'notify_url' => env('ZPAY_NOTIFY_URL'),
        'return_url' => env('ZPAY_RETURN_URL'),
    ],

    'exploration' => [
        'share_per_minute' => (int) env('EXPLORATION_SHARE_PER_MINUTE', 5),
    ],

];
