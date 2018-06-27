<?php
    /**
     * Created by PhpStorm.
     * User: tengjufeng
     * Date: 2018/6/27
     * Time: 下午5:15
     */

    //数据库驱动类方法接口
    interface DbInterface {
        //数据库连接
        public function conn();

        public static function getInstance();
    }

    //mysql驱动继承db接口
    class MysqlDriver implements DbInterface {
        protected static $db;

        private function __construct() {
            //防止new
        }

        private function __clone() {
            // TODO: Implement __clone() method.
            //防止克隆
        }

        //单例模式
        public static function getInstance() {
            if (!self::$db) {
                self::$db = new self();
            }

            return self::$db;
        }

        public function conn() {
            // TODO: Implement conn() method.
            return 'mysql conn' . PHP_EOL;
        }
    }

    //oracle驱动继承db接口
    class OracleDriver implements DbInterface {

        protected static $db;

        private function __construct() {
            //防止new
        }

        private function __clone() {
            // TODO: Implement __clone() method.
            //防止克隆
        }

        //单例模式
        public static function getInstance() {
            if (!self::$db) {
                self::$db = new self();
            }

            return self::$db;
        }

        public function conn() {
            // TODO: Implement conn() method.
            return 'oracle conn ' . PHP_EOL;
        }
    }

    //数据库驱动工厂接口
    interface FactoryInterface {
        public static function newDb();
    }

    class MysqlFactory implements FactoryInterface {
        public static function newDb() {
            // TODO: Implement newDb() method.
             $db = MysqlDriver::getInstance();
            Register::set('mysql',self::$db);
             return $db;
        }
    }

    class OracleFactory implements FactoryInterface {
        public static function newDb() {
            $db = OracleDriver::getInstance();
            Register::set('oracle',self::$db);
            return $db;
        }
    }