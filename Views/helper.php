<?php

    $app -> notFound(function () use ($app) {$app -> render('404.php', array('_TITLE' => _BASE_TITLE . ' 404', '_BASE_URL' => _BASE_URL));});