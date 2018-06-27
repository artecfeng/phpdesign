<?php
    /**
     * 类的自动加载 spl_autoload_register
     */
    spl_autoload_register(function ($class) {
        $php = __DIR__ . '/classs/' . $class . '.php';
        //echo $php;
        require $php;
    });

    $test1 = new Test1();
     $test2 = new Test2();
    $test1->test();
    $test2->test();


