<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel Security Checker — Recipients
    |--------------------------------------------------------------------------
    |
    | This will tell the package where to send its security mails.
    |
    */

    'recipients' => [
        env('LCS_MAIL_TO', null)
    ],

    /*
     |--------------------------------------------------------------------------
     | Laravel Security Checker — Email settings
     |--------------------------------------------------------------------------
     |
     | Decides wether the package should send an email even if there aren't
     | any vulnerabilities found.
     |
     */

    'email_even_without_vulnerabilities' => env('LCS_EMAIL_WITHOUT_VULNERABILITIES', false),
];
