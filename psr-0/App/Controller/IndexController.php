<?php
    /**
     * Created by PhpStorm.
     * User: tengjufeng
     * Date: 2018/6/27
     * Time: 下午4:11
     */

    namespace App\Controller;


    use Artec\Str;

    class IndexController {

        /**
         * 返回随机字符串
         */
        public function index(){
            return Str::random().PHP_EOL;
        }
    }