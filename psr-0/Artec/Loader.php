<?php
    /**
     * Created by PhpStorm.
     * User: tengjufeng
     * Date: 2018/6/27
     * Time: 下午4:13
     */

    namespace Artec;


    class Loader {

        public static function autoload($class){

            require  DIR.DS.str_replace('\\','/',$class).'.php';
        }
    }