<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Theme Builder',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'1234',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),

	// application components
	'components'=>array(
             'clientScript' => array(
        'class' => 'CClientScript',
        'packages' => array(
            'customcss' => array(
                'baseUrl' => '/css',
                'css' => array(
                    'customcss.css',
                ),
            ),
        ),
    ),
    'session' => array(
        'class' => 'CHttpSession',
        'cookieParams' => array(
            'httponly' => true,
        ),
    ),
    // ... other components ...

		/*'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),*/
            
		// uncomment the following to enable URLs in path-format
	

		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=theme_builder_db',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
                        'enableProfiling' => true,
                        'enableParamLogging' => true,
		),
		/*'urlManager' => array(
    'urlFormat' => 'path',
    'showScriptName' => false,
    'rules' => array(
        'apply-theme' => 'applytheme/index',
        // Other rules
    ),
),
*/
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		/*'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error,warning,info,trace',
				),
				// uncomment the following to show log messages on web pages
				
				array(
					'class'=>'CWebLogRoute',
				),
				
			),
		),*/
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);