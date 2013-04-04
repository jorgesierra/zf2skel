<?php

return array(

    'controllers' => array(
        'invokables' => array(
            'Apiconfig\Controller\Configs' => 'Apiconfig\Controller\ConfigsController',
        ),
    ),
    'view_manager' => array(
       'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
       /*
       'template_map' => array(
            //'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'apiconfig/configs/index' => __DIR__ . '/../view/apiconfig/configs/index.phtml',
        ),
        */
    ),

    'router' => array(
        'routes' => array(
            'apiconfig' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/configs[/][:action][/:id]',
                    'defaults' => array(
                            'controller' => 'Apiconfig\Controller\Configs',
                            'action' => 'index'
                    ),
                ),
            ),
        ),
    ),
);
