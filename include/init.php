<?php
require_once(__DIR__ . '/../vendor/autoload.php');
require_once(__DIR__ . '/../config/config.php');
require_once(__DIR__ . '/functions.php');

sstart();

try {
    $dbh = new PDO($cfg_sql_url, $cfg_sql_user, $cfg_sql_pass);
    $dbh->exec('create table if not exists `user` (`character_id` int(11) NOT NULL, `character_name` varchar(45) NOT NULL, `corporation_id` int(11) NOT NULL, `corporation_name` varchar(45) NOT NULL, `alliance_id` int(11) default null, `alliance_name` varchar(45) default null, `ts3_privilegekey` TEXT, PRIMARY KEY (`character_id`))');
} catch (PDOException $e) {
    $_SESSION['error_code'] = 50;
    $_SESSION['error_message'] = 'Failed to connect to the database.';
    header('Location: ' . $cfg_url_base);
    exit();
}

