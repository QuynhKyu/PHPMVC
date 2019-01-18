<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 04/01/2019
 * Time: 7:44 CH
 */

session_start();
$site_path = dirname(__FILE__);// dir_name lấy được thư mục mẹ của đường dẫn vật lý hiện tại
define('SITE_PATH', $site_path);
define('IS_ADMIN', 0);
define('APP_PATH', SITE_PATH.'/app');
define('CONTROLLER_PATH', SITE_PATH.'/app/controllers');
define('MODEL_PATH', SITE_PATH.'/app/models');
define('VIEW_PATH', SITE_PATH.'/app/views');
define('CORE_PATH', SITE_PATH.'/core');
define('DB_PATH', SITE_PATH.'/core/database');
define('HELPER_PATH', SITE_PATH.'/core/helper');
define('URL', 'http://localhost:8080/PHPMVC/');
define('URL_ASSETS', URL.'assets/');

spl_autoload_register(function ($class_name){

    /*tôi là spl_autoload đây
     *tôi sẽ đc chạy ngay khi bạn khởi tạo
     * một class hoặc bạn sử dụng hàm class exit()
     * */
    $class_file = $class_name. '.php';

    $paths = array(CONTROLLER_PATH, MODEL_PATH, VIEW_PATH, CORE_PATH, DB_PATH, HELPER_PATH);
    if (is_array($paths) && count($paths)){
        foreach ($paths as $path){
           $class_file_path =  $path .'/'. $class_file;
           if (file_exists($class_file_path)){
               require $class_file_path;
           }

        }

    }

});

$controller = isset($_REQUEST["controller"]) ? $_REQUEST["controller"] : 'index';
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'index';

$controller = strtolower($controller);
$action = strtolower($action);

$controllerClass = $controller . 'Controller';
$actionName = $action . 'Action';



echo $controllerClass;
$check = class_exists($controllerClass);

if(class_exists($controllerClass)){
    // class controller có tồn tại


}else{
    $controllerClass = 'errorController';
    $instanceController = new $controllerClass(); // khởi tạo đối tượng
    $instanceController->indexAction();
}

