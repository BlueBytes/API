<?php
/**
 * Configuration file generated by ZF Apigility Admin
 *
 * The previous config file has been stored in ./config/application.config.old
 */
return array(
    'modules' => array(
        'Application',
        'ZF\\DevelopmentMode',
        'ZF\\Apigility',
        'ZF\\Apigility\\Provider',
        'ZF\\Apigility\\Documentation',
        'AssetManager',
        'ZF\\ApiProblem',
        'ZF\\Configuration',
        'ZF\\OAuth2',
        'ZF\\MvcAuth',
        'ZF\\Hal',
        'ZF\\ContentNegotiation',
        'ZF\\ContentValidation',
        'ZF\\Rest',
        'ZF\\Rpc',
        'ZF\\Versioning',
        'Phpro\\DoctrineHydrationModule',
        'ZF\\Apigility\\Doctrine\\Server',
        'DoctrineModule',
        'DoctrineORMModule',
        'ToesTest',
        'ZfrCors'
    ),
    'module_listener_options' => array(
        'module_paths' => array(
            '/var/www/html/toes-api/module',
            '/var/www/html/toes-api/vendor',
        ),
        'config_glob_paths' => array(
            '/var/www/html/toes-api/config/autoload/{,*.}{global,local}.php',
        ),
    ),
);
