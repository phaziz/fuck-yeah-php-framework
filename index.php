<?php

    define('_BASE_URL','');
    define('_BASE_TITLE','Christian Becher | phaziz.com |');
    define('_SOFTWARE_VERSION','20130823');
    require 'Helper/Parsedown.php';
    require 'Slim/Slim.php';
    require 'Slim/Log/DateTimeFileWriter.php';
    \Slim\Slim::registerAutoloader();
    $app = new \Slim\Slim(
        array(
            'mode'              => 'production',
            'debug'             => false,
            'templates.path'    => './Templates',
            'session.handler'   => null,
            'log.writer'        => new \Slim\Extras\Log\DateTimeFileWriter(array(
                'path'              => './Logfiles',
                'name_format'       => 'Ymd',
                'message_format'    => '%label% // %date% // %message%'
            )
        )
    ));
    require_once 'Views/helper.php';
    require_once 'Views/index.php';
    require_once 'Views/news.php';
    require_once 'Views/atom.php';
    require_once 'Views/twitter.php';
    $app -> run();