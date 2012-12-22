<?php
$db_config = array( 
	'prod' => array(
		'host' => 'localhost',
		'username' => 'nedo',
		'password' => 'sta61k',
		'database' => 'nedo'),
	'devel' => array(
		'host' => 'localhost',
		'username' => 'level',
		'password' => 'level',
		'database' => 'levelowanie'),
	'nedo' => array(
		'host' => 'localhost',
		'username' => 'root',
		'password' => 'k3j2l4prmm',
		'database' => 'levelowanie'
	)		
		
		);

		
$levels = array(
	0 => array(
		'name' => 'noone',
		'threshold'  =>  0
	),
	1 => array(
		'name' => 'llama',
		'threshold' => 10
	),
	2 => array(
		'name' => 'curious llama',
		'threshold' => 50
	),
	3 => array(
		'name' => 'gifted llama',
		'threshold' => 125
	),
	4 => array(
		'name' => 'php noob',
		'threshold' => 200
	),
	5 => array(
		'name' => 'php+myqsl noob',
		'threshold' => 350
	),
	6 => array(
		'name' => 'php apprentice',
		'threshold' => 500
	),
	7 => array(
		'name' => 'oop apprentice',
		'threshold' => 1000
	),
	8 => array(
		'name' => 'xxxxxxx',
		'threshold' => 1800
	),
	9 => array(
		'name' => 'xxxxxxx',
		'threshold' => 3000
	)
);
$questdb = array(
	'basic' => 100,
	'simple' => 200,
	'medium' => 300,
	'hard' => 400,
	'extreme' => 500,
	'OMGWTFBBQ' => 1000);
?>