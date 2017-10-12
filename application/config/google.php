<?php defined('BASEPATH') OR exit('No direct script allowed');
/*
|-----------------------------------------------
-----------------------------------------------
|Google API Configuration
|----------------------------------------------
-----------------------------------------------
| client_id  string Your Google API Client ID.
| client_secret string Your Google API Client sesret.
| redirect_uri string URL to redirect back to after login.
| application_name string Your Google application name.
| api_key    string Developer key.
| scopes     string Specify   scopes.
*/
$config['google']['client_id']='Google_API_Client_ID';
$config['google']['client_secret']='Google_API_Client_Secret';
$config['google']['redirect_uri']='http://localhost/codeigniter/user_authentication/';
$config['google']['application_name']='myeo';
$config['google']['api_key']='';
$config['google']['scopes']=array();
?>