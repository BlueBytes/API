<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2014 Zend Technologies USA Inc. (http://www.zend.com)
 */

return [
    // Development time modules
    'modules'                 => [
        'ZFTool',
        'ZF\Apigility\Admin',
        'ZF\Apigility\Doctrine\Admin'
    ],
    // development time configuration globbing
    'module_listener_options' => [
        'config_glob_paths' => [
            APPLICATION_PATH . 'config/autoload/{,*.}{global,local}-development.php'
        ],
    ]
];
