<?php if (!defined('GUEST')) die('go away');

$cfg_url_base = "http://example.org/"; // include a trailing slash - 'sso.php' will be appended as callback

$cfg_restrict_access_by_ticker = 0; // IMPORTANT: This settings needs to be in sync with mumble-sso-auth.ini

$cfg_ccp_client_id = "id from CCP";
$cfg_ccp_client_secret = "secret from CCP";

$cfg_user_agent = "something for CCP to identify you";

$cfg_mumble_address = "example.org";
$cfg_mumble_port = "64738";
$cfg_mumble_version = "1.2.0";
$cfg_mumble_title = "Awesome Comms";
$cfg_mumble_channel = "Guests wait here";

//$cfg_sql_url = 'mysql:host=localhost;dbname=mumble-sso';
//$cfg_sql_user = 'root';
//$cfg_sql_pass = 'root';

$cfg_sql_url = 'sqlite:../data/eve-comms-sso.db';
