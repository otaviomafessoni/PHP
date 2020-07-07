<?php

defined('PS') || define('PS', PATH_SEPARATOR);
defined('DS') || define('DS', DIRECTORY_SEPARATOR);

defined('ROOT') || define('ROOT', realpath(dirname(__FILE__)));
defined('CONFIG') || define('CONFIG', ROOT.DS.'config');
defined('LOGS') || define('LOGS', ROOT.DS.'logs');
defined('VENDOR') || define('VENDOR', ROOT.DS.'vendor'); // ou plugins

require_once VENDOR.DS.'autoload.php';

date_default_timezone_set('America/Sao_Paulo');

/*$db = parse_ini_file(CONFIG.DS.'application.ini');
$mysql = new MyMysql\MyMysql(array(
    'DB_LOG' => $db['DB_LOG'],
    'DB_HOST' => $db['DB_HOST'],
    'DB_NAME' => $db['DB_NAME'],
    'DB_USER' => $db['DB_USER'],
    'DB_PASS' => $db['DB_PASS'],
), LOGS);
*/
