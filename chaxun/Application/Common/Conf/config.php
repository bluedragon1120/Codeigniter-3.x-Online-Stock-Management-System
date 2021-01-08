<?php
$arr1 = array(
	'DB_TYPE' => 'mysql',
	'DB_HOST' => 'localhost',
	'DB_NAME' => 'e_gsnklz_com',
	'DB_USER' => 'e_gsnklz_com',
	'DB_PWD' => '4TGa7ZTPWtkfiwHb',
	'DB_PORT' => '3306',
	'DB_PREFIX' => 'ci_',
	'DB_DEBUG' => true,
	'SHOW_PAGE_TRACE' => false,

	'APP_GROUP_LIST' => 'Home',
	'MODULE_DENY_LIST' => array('Common'),
	'DEFAULT_GROUP' => 'Home',

	'TMPL_ACTION_ERROR' => 'Index:jump',
	'TMPL_ACTION_SUCCESS' => 'Index:jump',
);
return $arr1;
