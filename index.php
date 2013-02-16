<?php    

    ini_set('use_trans_sid', '');
    session_cache_limiter(false);
    session_start();

    if (empty($_SESSION)) {
        session_regenerate_id(true);
        $_SESSION["s_id"] = session_id(); 
    }

    define('_BASE_URL','');
    define('_SOFTWARE_VERSION','1.0.0');

    /*
	require 'Helper/idiorm.php';
    require 'Helper/paris.php';
	*/
    require 'Slim/Slim.php';

    \Slim\Slim::registerAutoloader();

    /*
    require 'Models/example_model.php';
    ORM::configure('mysql:host=localhost;dbname=Database');
    ORM::configure('username','USERNAME');
    ORM::configure('password','PASSWORD');
	*/

    $app = new \Slim\Slim(array(
        'mode'              => 'development',
        'debug'             => true,
        'templates.path'    => './Templates',
    ));

    require 'Views/helper.php';
    require 'Views/index.php';

    $app->run();