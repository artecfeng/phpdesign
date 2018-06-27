<?php
    /**
     * Created by PhpStorm.
     * User: tengjufeng
     * Date: 2018/6/27
     * Time: 下午5:15
     */
    require 'Register.php';
    require 'Factory.php';
    echo '**********使用工厂模式***************'.PHP_EOL;
    $mysql = MysqlFactory::newDb();
    echo $mysql->conn();
    $oracle = OracleFactory::newDb();
    echo $oracle->conn();

    echo '**********使用注册树模式***************'.PHP_EOL;
    var_dump(Register::$obj);
    $mysql1 = Register::get('mysql');
    echo $mysql1->conn();
    $oracle1 = Register::get('oracle');
    echo $oracle1->conn();