<?php

    $app->get('/news(/)', function () use ($app) 
        {
            $CONTENT = Parsedown::instance() -> parse(file_get_contents(_BASE_URL . 'Content/News/index.md'));
            if(!$CONTENT)
            {
                $CONTENT = 'Ups! No content... sorry!';
            }
            $app -> render('news.php', array
                (
                    '_TITLE'            => _BASE_TITLE . ' News!',
                    '_BASE_URL'         => _BASE_URL,
                    '_SOFTWARE_VERSION' => _SOFTWARE_VERSION,
                    'CONTENT'           => $CONTENT
                )
            );
        }
    );

    $app->get('/news(/:PAGE_VAR)(/)', function ($PAGE_VAR = '') use ($app) 
        {
            if($PAGE_VAR == '')
            {
                $PAGE_VAR = 'index';
            }

            $CONTENT = Parsedown::instance()->parse(file_get_contents(_BASE_URL . 'Content/News/' . $PAGE_VAR . '.md'));
            if(!$CONTENT)
            {
                $CONTENT = 'Ups! No content... sorry!';
            }
            $app -> render('news.php', array
                (
                    '_TITLE'            => _BASE_TITLE . ' News!',
                    '_BASE_URL'         => _BASE_URL,
                    '_SOFTWARE_VERSION' => _SOFTWARE_VERSION,
                    'CONTENT'           => $CONTENT
                )
            );
        }
    );