<?php
$site_folder = 'test';

//Making shortcuts for easy coding
define('DS', DIRECTORY_SEPARATOR);
define('INSTANCE_ROOT', realpath(dirname(__FILE__)).DS);
define('CURRENT_MODULE_DIR', INSTANCE_ROOT . 'modules' . DS);
define('URL', 'http://' . $_SERVER["HTTP_HOST"] . DS . $site_folder . DS .'public' . DS);
define('IMG_ROOT', URL . 'img' . DS);
define('CSS_ROOT', URL . 'css' . DS);
define('JS_ROOT', URL . 'js' . DS);
define('ADV_ROOT', URL. 'adv' . DS);

//Requqire all config folders for loading classes that a site needs.
$config = array(
    'folders' => array(
        'core',
        'libs'
    )
);

foreach($config['folders'] as $folder){
    foreach(glob(INSTANCE_ROOT . $folder . DS . '*.php') as $filename){
        require_once($filename);
    }
}

//Database config
define('DB_HOST', "127.0.0.1");
define('DB_DBNAME', 'test');
define('DB_PORT', 3306);
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');

$view = new View();
session_start();
?>
