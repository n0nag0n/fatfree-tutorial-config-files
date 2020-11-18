<?php

$db = new DB\SQL(
    'mysql:host=localhost;port=3306;dbname=fatfree_tutorial;charset=utf8',
    $config['db_user'],
	$config['db_pass'],
	[
		PDO::ATTR_EMULATE_PREPARES => false,
		PDO::ATTR_STRINGIFY_FETCHES => false
	]
);

if($fw->ENVIRONMENT !== 'DEVELOPMENT') {
	$db->log(false);
}

$fw->set('DB', $db);