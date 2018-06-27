<?php
    /**
     * Created by PhpStorm.
     * User: tengjufeng
     * Date: 2018/6/27
     * Time: 下午5:44
     */

    /**
     * Class Register
     * 注册树模式
     */
    class Register {
        public static $obj;

        /**
         * @param $alias 别名
         * @param $object 对象
         *
         */
        public static function set($alias, $object) {
            self::$obj[$alias] = $object;
        }

        /**
         * @param $alias 根据别名获取对象
         */
        public static function get($alias) {
            return self::$obj[$alias];
        }

        /**
         * @param $alias 取消注册的类
         */
        public static function _unset($alias) {
            unset(self::$obj[$alias]);
        }
    }