<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config['facebook_app_id']='InsertAppID';//app id
$config['facebook_app_secret']='InsertAppSecret';//app secret
$config['facebook_login_type']='web';
$config['facebook_login_redirect_url']='user_authentication';
$config['facebook_logout_redirect_url']='user_authentication/logout';
$config['facebook_permissions']=array('email');
$config['facebook_graph_version']='v2.6';
$config['facebook_auth_on_load']=TRUE;
?>