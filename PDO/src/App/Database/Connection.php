<?php
    declare(strict_types=1);

    namespace App\Database;

    use Exception;

    class Connection 
    {
        /**
         * @var PDO
         */
        private $connection;

        public function __construct()
        {
            $this->connection = new \PDO('mysql:host=localhost;dbname=test_bd', 'root', '');
        }

        public function getConnection() {
            try {
                return $this->connection;
            } catch (Exception $e) {
                echo $e->getMessage();
                die();
            }
        }
    }