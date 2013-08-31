<?php

    $app->get('/twitter(/)', function () use ($app) 
        {
            $app -> render('twitter.php', array
                (
                    '_TITLE'            => _BASE_TITLE . ' Welcome!',
                    '_BASE_URL'         => _BASE_URL,
                )
            );
        }
    );