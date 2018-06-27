<?php
    /**
     * Created by PhpStorm.
     * User: tengjufeng
     * Date: 2018/6/27
     * Time: 下午6:03
     */

    class Mysqli implements DatabaseInterface {
        public $db;
        public function conn($host, $user, $password, $dbname) {
            // TODO: Implement conn() method.
            $conn = mysqli_connect($host,$user,$password,$dbname);
            $this->db = $conn;
        }

        public function qurey($sql) {
            // TODO: Implement qurey() method.
            return mysqli_query($this->db,$sql);
        }
        public function close() {
            // TODO: Implement close() method.
            mysqli_close($this->db);
        }
    }