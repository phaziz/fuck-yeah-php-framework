<?php

    $app -> get('/', function () use ($app) {
        $app -> etag('20130217');
        $app -> render('index.php', array(
            'TITLE'                 => 'Index-File',
            '_BASE_URL'             => _BASE_URL,
            '_SOFTWARE_VERSION'     => _SOFTWARE_VERSION,
        ));
    });