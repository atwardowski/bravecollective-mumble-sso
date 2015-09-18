<?php
include_once(__DIR__.'/../include/init.php');
sso_update();
header('Location: ' . $cfg_url_base);
