<?php
    /**
     * Created by PhpStorm.
     * User: tengjufeng
     * Date: 2018/6/27
     * Time: 下午5:15
     */
    require 'Factory.php';

    $mysql = MysqlFactory::newDb();
    echo $mysql->conn();
    $oracle = OracleFactory::newDb();
    echo $oracle->conn();