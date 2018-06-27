<?php
    /**
     * Created by PhpStorm.
     * User: tengjufeng
     * Date: 2018/6/27
     * Time: 下午6:03
     */
    interface DatabaseInterface{
        public function conn($host,$user,$password,$dbname);
        public function qurey($sql);
        public function close();
    }