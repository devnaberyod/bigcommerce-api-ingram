<?php
return array(

    /*
	|--------------------------------------------------------------------------
	| Default FTP Connection Name
	|--------------------------------------------------------------------------
	|
	| Here you may specify which of the FTP connections below you wish
	| to use as your default connection for all ftp work.
	|
	*/

    'default' => 'connection1',

    /*
    |--------------------------------------------------------------------------
    | FTP Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the FTP connections setup for your application.
    |
    */

    'connections' => array(

        'connection1' => array(
            'host'   => 'ftp.ingrammicro.com.au',
            'port'  => 21,
            'username' => 'IMGuest_ftplogin',
            'password'   => 'Ingram@1515Z',
            'passive'   => false,
        ),
    ),
);