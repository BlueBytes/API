<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2014 Zend Technologies USA Inc. (http://www.zend.com)
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
define('APPLICATION_PATH', dirname(__DIR__));
chdir(APPLICATION_PATH);

if (!file_exists(APPLICATION_PATH . '/vendor/autoload.php')) {
    die('Failed to initialise autoloader.');
}

// Setup autoloading
include APPLICATION_PATH . '/vendor/autoload.php';

$appConfig = include APPLICATION_PATH . '/config/application.config.php';

if (file_exists(APPLICATION_PATH . '/config/development.config.php')) {
    $appConfig = Zend\Stdlib\ArrayUtils::merge(
        $appConfig, include APPLICATION_PATH . '/config/development.config.php'
    );
}

// Some OS/Web Server combinations do not glob properly for paths unless they
// are fully qualified (e.g., IBM i). The following prefixes the default glob
// path with the value of the current working directory to ensure configuration
// globbing will work cross-platform.
if (isset($appConfig['module_listener_options']['config_glob_paths'])) {
    foreach ($appConfig['module_listener_options']['config_glob_paths'] as $index => $path) {
        if ($path !== 'config/autoload/{,*.}{global,local}.php') {
            continue;
        }
        $appConfig['module_listener_options']['config_glob_paths'][$index] = getcwd() . '/' . $path;
    }
}

// Run the application!
Zend\Mvc\Application::init($appConfig)->run();
