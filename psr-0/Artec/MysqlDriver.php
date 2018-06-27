<?php
    /**
     * Created by PhpStorm.
     * User: tengjufeng
     * Date: 2018/6/27
     * Time: 下午4:38
     */

    namespace Artec;

    /**
     * Class MysqlDriver
     * @package Artec
     * 实现链式操作，方法里面要返回$this
     */
    class MysqlDriver {
        public function where($where){
            return $this;
        }
        public function order($order){
            return $this;
        }
        public function limit($limit){
            return $this;
        }
        public function query(){

        }
    }