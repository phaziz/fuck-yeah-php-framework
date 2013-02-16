<?php

    $app -> notFound(function () use ($app) {
    	$app -> etag('20130217');
        $app -> render('404.php', array(
            'TITLE'                 => '404',
            '_BASE_URL'             => _BASE_URL,
            '_SOFTWARE_VERSION'     => _SOFTWARE_VERSION,
        ));
    });