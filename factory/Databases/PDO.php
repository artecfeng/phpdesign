<?php
    /**
     * Created by PhpStorm.
     * User: tengjufeng
     * Date: 2018/6/27
     * Time: 下午6:03
     */

    class PDO implements DatabaseInterface {
        /**
         * @var \PDO
         */
        public  $pdo ;

        public function conn($host, $user, $password, $dbname) {
            // TODO: Implement conn() method.

            $conn = new PDO("mysql:host={$host};dbname={$dbname}", $user, $password);

            $this->pdo = $conn;
        }

        public function qurey($sql) {
            // TODO: Implement qurey() method.
            return $this->pdo->query($sql);
        }

        public function close() {
            // TODO: Implement close() method.
            $this->pdo->close();
        }
    }