<?php

    $app->get('/atom(/)', function () use ($app) {$app -> render('atom.xml.php');});