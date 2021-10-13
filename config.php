<?php
require_once 'vendor/autoload.php';
require_once 'class-db.php';
  
define('ONEDRIVE_CLIENT_ID', 'client_id_from_azure');
define('ONEDRIVE_CLIENT_SECRET', 'client_secret_from_azure');
define('ONEDRIVE_SCOPE', 'files.read files.read.all files.readwrite files.readwrite.all offline_access');
define('ONEDRIVE_CALLBACK_URL', 'redirect_URL_to_Callback');
  
$config = [
    'callback' => ONEDRIVE_CALLBACK_URL,
    'keys'     => [
                    'id' => ONEDRIVE_CLIENT_ID,
                    'secret' => ONEDRIVE_CLIENT_SECRET
                ],
    'scope'    => ONEDRIVE_SCOPE,
    'authorize_url_parameters' => [
            'approval_prompt' => 'force',
            'access_type' => 'offline'
    ]
];
  
$adapter = new Hybridauth\Provider\MicrosoftGraph( $config );