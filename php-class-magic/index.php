<?php

    $magic = new Magic();
    $magic->test = "aaa";
    echo $magic->test . PHP_EOL;

    echo $magic->action('aa');

    class Magic {
        protected $arr = [];

        //如果成员不存在，则执行get，set
        function __set($key, $value) {
            $this->arr[$key] = $value;
        }

        function __get($key) {
            return $this->arr[$key];
        }

        //如果调用方法不存在则执行call
        function __call($name, $arguments) {
            return "whooops look like something whent wrong hahaha" . PHP_EOL;
        }

        public static function __callStatic($name, $arguments) {

        }

        public function __toString() {
            return __CLASS__;
        }

        //将对象当成函数调用
        public function __invoke($param) {
            // TODO: Implement __invoke() method.
            return 'invoke-' . $param;
        }
    }