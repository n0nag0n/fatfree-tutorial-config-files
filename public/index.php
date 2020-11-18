<?php

require(__DIR__.'/../vendor/autoload.php');

putenv("DB_PASS=123456");

$fw = Base::instance();

$config_path = __DIR__.'/../config/config.ini';
if(file_exists($config_path) === false) {
	die('Missing config file');
}
$fw->config($config_path);

if(file_exists(__DIR__.'/../config/routes.ini') === false) {
	die('Missing config file');
}
$fw->config(__DIR__.'/../config/routes.ini', true);

require(__DIR__.'/../config/services.php');

$fw->run();