<?php

// This is the database connection configuration.
return array(
	// ' class ' => ' system.db.CDbConnection ' ,
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// 'schemaCachingDuration'=>3600, // Running in production mode

	// uncomment the following lines to use a MySQL database

	'connectionString' => 'mysql:host=localhost;dbname=yii1blog',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8',
	//'tablePrefix' => 'tbl_',
	// 'schemaCachingDuration'=>3600, // Running in production mode

);