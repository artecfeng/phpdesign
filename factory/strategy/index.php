<?php
    /**
     * Created by PhpStorm.
     * User: tengjufeng
     * Date: 2018/6/28
     * Time: 上午11:16
     */
    $useStategy = new UseStategy();
    if (isset($_GET['man'])) {
        $strategy = new Man();
    } elseif (isset($_GET['woman'])) {
        $strategy = new Woman();
    }
    $useStategy->setStragey($strategy);
    $useStategy->index();