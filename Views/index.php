<?php

    $app->get('/', function () use ($app) 
        {
            $app -> etag('20130831');
            $log = $app -> getLog();
            $log -> debug("One more Visitor at your Homepage");
            $CONTENT = Parsedown::instance() -> parse(file_get_contents(_BASE_URL . 'Content/index.md'));
            if(!$CONTENT)
            {
                $CONTENT = 'Ups! No content... sorry!';
            }
            $app -> render('index.php', array
                (
                    '_TITLE'            => _BASE_TITLE . ' Welcome!',
                    '_BASE_URL'         => _BASE_URL,
                    'CONTENT'           => $CONTENT
                )
            );
        }
    );