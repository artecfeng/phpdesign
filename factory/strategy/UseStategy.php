<?php
    /**
     * Created by PhpStorm.
     * User: tengjufeng
     * Date: 2018/6/28
     * Time: 上午11:03
     */

    class UseStategy {
        /**
         * @var Strategy
         */
        protected $strategy;

        public function index() {
            $this->strategy->show();
        }

        public function setStragey(Strategy $stragey) {
            $this->$stragey = $stragey;
        }
    }

