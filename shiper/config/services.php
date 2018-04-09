<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'facebook' => [
        'client_id' => '215429565873844',
        'client_secret' => '720597bcc0ec1e8706acc72ae14ab6c8',
        'redirect' => 'http://127.0.0.1:8000/callback/facebook',
    ],

    'google' => [
        'client_id' => '604920597849-ttrj8ou326blroj5ohi5g48aelcnht4j.apps.googleusercontent.com',
        'client_secret' => 'asQ-1D0S9mA4xv54M5BnOrzL',
        'redirect' => 'http://127.0.0.1:8000/auth/google/callback',
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

];
