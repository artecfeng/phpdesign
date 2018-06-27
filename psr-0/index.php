<?php
    /**
     * Created by PhpStorm.
     * User: tengjufeng
     * Date: 2018/6/27
     * Time: 下午4:06
     */

    define('DIR', __DIR__);
    define('DS', DIRECTORY_SEPARATOR);
    include DIR.'/Artec/Loader.php';

    spl_autoload_register('\\Artec\\Loader::autoload');

    //route
    //middleware
    //controller
    $controller = new \App\Controller\IndexController();
    //action
    echo $controller->index();
    //链式操作
    $db = new \Artec\MysqlDriver();
    $db->where('id = 10')->order('name desc')->query();