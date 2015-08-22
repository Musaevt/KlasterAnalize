<?php

return array(
    'modules' => array(
        'index'=>'Index',
        'err404'=>'Err404',
        'api'=>'Api',
        'search'=>'Search',
        'analize'=>'Analize',
        'results'=>'Results'
        ),
    'module_options' => array(
        'module_path' => '/module'
    ),
    'vendor_options' => array(
        'vendor_path' => '/vendor',
        'projects' => array(
            'lib' => array(
                'base_path' => '/lib/libraryframework',
                'library_path' => '/lib/libraryframework/library'
            )
        )
    ),
    'views_options' => array(
        'views_path' => '/vendor/lib/libraryframework/resources/layout',
        'common_includes' => array(
            'title' => 'Анализ групп в Вконтакте',
            'meta' => array(
                'charset' => '<meta http-equiv="content-type" content="text/html; charset=utf-8">',
                'ie' => '<meta http-equiv="X-UA-Compatible" content="IE=edge">'
            ),
            'script' => array(
                'jquery',
                'ajax'
                
            ),
            'css' => array('styles'),
            'icon' => array(),
            'views' => array(
                'head' => array(
                    'path' => 'common/head/head'
                ),
                'footer' => array(
                 'path' => 'common/footer/footer'
                )
            )
        )
    ),
    'resource_options' => array(
        'path'       => '/application/resources/global.php',
        'application'=>array(
          'APP_ID'      =>4780016,
          'APP_PASS'    =>'mCmez1oBgIqItJIHlriM'
            )
    ),
    'db_options' => require Q_PATH.'/application/config/db.config.php',
    
   
);
//добавляеться access_token   , expires_in
/*
'views' => array(
    'head' => array(
        'authorized_mode' => true,
        'allocated_paths' => array(
            array(
                'range' => 'default',
                'value' => 'common/head/head'
            ),
            array(
                'range' => array(1, 2),
                'value' => 'common/footer/footer'
            )
        )
    ),
    'footer' => array(
        'authorized_mode' => false,
        'allocated_paths' => array(
            array(
                'range' => 'default',
                'value' => 'common/footer/footer'
            )
        )
    )
)
*/