<?php
    /**
     * Created by PhpStorm.
     * User: tengjufeng
     * Date: 2018/6/27
     * Time: 下午5:15
     */
    //数据库驱动类方法接口
    interface DbInterface{
        //数据库连接
        public function conn();
    }
    //mysql驱动继承db接口
    class MysqlDriver implements DbInterface{
        public function conn() {
            // TODO: Implement conn() method.
            return 'mysql conn'.PHP_EOL;
        }
    }
    //oracle驱动继承db接口
    class OracleDriver implements DbInterface{
        public function conn() {
            // TODO: Implement conn() method.
            return 'oracle conn '.PHP_EOL;
        }
    }

    //数据库驱动工厂接口
    interface FactoryInterface{
        public static function newDb();
    }

    class MysqlFactory implements FactoryInterface{
        public static function newDb() {
            // TODO: Implement newDb() method.
            return new MysqlDriver();
        }
    }

    class OracleFactory implements FactoryInterface{
        public static function newDb() {
            // TODO: Implement newDb() method.
            return new OracleDriver();
        }
    }