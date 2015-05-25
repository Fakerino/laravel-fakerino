<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default locale
    |--------------------------------------------------------------------------
    |
    | This option controls the fake data ODS files session "driver" that will be used on
    | requests. By default, we will use the lightweight native driver but
    | you may specify any of the other wonderful drivers provided here.
    |
    | Supported=> "en-EN", "es-ES", "fr-FR", "de-DE", "it-IT", .......
    | For complete list see=> https=>//github.com/niklongstone/open-data-sample/tree/master/data
    |
    */
    'locale' => 'en-GB',

    /*
    |--------------------------------------------------------------------------
    | Fake complex data
    |--------------------------------------------------------------------------
    |
    | This option describe aggregated fake data type.
    | You can define your own complex data to perform an easy call.
    | Example =>
    | 'fake' => [
    |    'fakeFemale' => ['titlefemale', 'namefemale', 'surname'],
    |    'fakeMale' => ['titlemale', 'namemale', 'surname'],
    | ],
    |
    | $fakerino->fake('fakeFemale');
    |
    */
    'fake' => [
        'fakeFemale' => ['titlefemale', 'namefemale', 'surname'],
        'fakeMale' => ['titlemale', 'namemale', 'surname'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Database configuration
    |--------------------------------------------------------------------------
    |
    | This option configure a database connection used by the fakeTable method.
    |
    */

    'database' => [
        'dbname' => 'mydatabase',
        'user' => 'myusername',
        'password' => 'mypassword',
        'host' => 'localhost',
        'driver' => 'pdo_mysql'
    ],
];