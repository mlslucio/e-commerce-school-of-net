<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional plasandbox0b820e48d3c74e4795a0db61f206e6de.mailgun.orgce to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => 'postmaster@sandbox0b820e48d3c74e4795a0db61f206e6de.mailgun.org',
        'secret' => 'key-6289e5aa7f106ee2893bb92faae3d8c1',
    ],

    'mandrill' => [
        'secret' => env('MAIL_PASSWORD'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => CodeCommerce\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

];
