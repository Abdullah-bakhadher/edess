<?php

return [

	/*
	   |--------------------------------------------------------------------------
	   | View Storage Paths
	   |--------------------------------------------------------------------------
	   |
	   | Most templating systems load templates from disk. Here you may specify
	   | an array of paths that should be checked for your views. Of course
	   | the usual Laravel view path has already been registered for you.
	   |
	   */

	'menu' => [
		[
			'icon' => 'fa fa-th-large',
			'title' => 'Home',
			'url' => '/',
			'route-name' => 'home'
		],
		[
			'icon' => 'fa fa-th-large',
			'title' => 'Add Referral',
			'url' => '/add_referral',
			'route-name' => 'add_referral'
		],
		[
			'icon' => 'fa fa-th-large',
			'title' => 'Referral Statistics',
			'url' => '/referral_statistics',
			'route-name' => 'referral_statistics'
		]
	]
];

// ,[
// 	'icon' => 'fa fa-align-left',
// 	'title' => 'Menu Level',
// 	'url' => 'javascript:;',
// 	'caret' => true,
// 	'sub_menu' => [[
// 		'url' => 'javascript:;',
// 		'title' => 'Menu 1.1',
// 		'sub_menu' => [[
// 			'url' => 'javascript:;',
// 			'title' => 'Menu 2.1',
// 			'sub_menu' => [[
// 				'url' => 'javascript:;',
// 				'title' => 'Menu 3.1',
// 			],[
// 				'url' => 'javascript:;',
// 				'title' => 'Menu 3.2'
// 			]]
// 		],[
// 			'url' => 'javascript:;',
// 			'title' => 'Menu 2.2'
// 		],[
// 			'url' => 'javascript:;',
// 			'title' => 'Menu 2.3'
// 		]]
// 	],[
// 		'url' => 'javascript:;',
// 		'title' => 'Menu 1.2'
// 	],[
// 		'url' => 'javascript:;',
// 		'title' => 'Menu 1.3'
// 	]]
// ]]

