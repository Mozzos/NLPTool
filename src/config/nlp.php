<?php
return[

    /*
    |--------------------------------------------------------------------------
    | Result Style
    |--------------------------------------------------------------------------
    |
    | By default, natural language analysis (as NLP) results will be returned as instances of the nlp
    |
    */

    'result' => 'default',

    /*
    |--------------------------------------------------------------------------
    | Default NLP Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the natural language analysis connections below you wish
    | to use as your default connection for all natural language analysis work. Of course
    | you may use many connections at once using the NLP library.
    |
    */

    'default' => 'LTP_Cloud',

    /*
    |--------------------------------------------------------------------------
    | NLP Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the natural language analysis connections setup for your application.
    | Of course, examples of configuring each natural language analysis platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All natural language analysis work in Laravel is done through the PHP Curl facilities
    | so make sure you have the driver for your particular natural language analysis of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [

        'LTP_Cloud' => [
            'driver' => 'ltp_cloud',
            'API_KEY' => '',
            'prefix' => '',
        ],

        'Boson' => [
            'driver' => 'boson_nlp',
            'API_KEY' => '',
            'prefix' => '',
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | NLP CacheDrive
    |--------------------------------------------------------------------------
    */
    'cache'=>'default'

];