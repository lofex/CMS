<?php

$GLOBALS['config'] = array(

	'github' => array(
		'api_url' => 'https://api.github.com/repos/lofex/CMS',
		'raw_url' => 'https://raw.github.com/lofex/CMS/master', 
		'git_url' => 'https://github.com/lofex/CMS',
		'readme' => 'https://raw.githubusercontent.com/lofex/CMS/master/README.md'
	),

	'mysql' => array(
		'host' => '127.0.0.1',
		'username' => 'root',
		'password' => 'tr82BklO',
		'database' => 'lofex'
	),

	'path' => array(
		'admin' => 'application/admin/',
		'class' => 'application/class/',
		'config' => 'application/config/',
		'core' => 'application/core/',
		'function' => 'application/function/',
		'interface' => 'application/interface/',
		'model' => 'application/model/',
		'view' => 'application/view/'
	),

	'remember' => array(
		'cookie_name' => 'LofeX-Cookie',
		'cookie_expiry' => '604800'
	),

	'session' => array(
		'session_name' => 'LofeX-Session',
		'token_name' => 'token'
	),

	'version' => array(
		'last' => '0.0.3'
	)

);
