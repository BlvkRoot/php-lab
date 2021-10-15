<?php
    declare(strict_types = 1);
    
    namespace App;

    use App\Database\Connection;

    class Products 
    {
        private $connection;
        private string $sql;
        private $pdo;

        public function __construct(){
            $this->connection = new Connection();
            $this->pdo = $this->connection->getConnection();
        }

        public function show(): array 
        {
            $this->sql = 'SELECT * FROM Products';

            $productsList = $this->pdo->query($this->sql);

            $products = [];

            foreach ($productsList as $key => $value) {
                array_push($products, $value);
            }

            return $products;
        }

        public function insert(string $descricao): int
        {
            $this->sql = 'INSERT INTO Products(descricao) VALUES(?)';

            $prepare = $this->pdo->prepare($this->sql);

            $prepare->bindParam(1, $descricao);
            $prepare->execute();

            return $prepare->rowCount();
        }

        public function update(string $descricao, int $id): int
        {
            $this->sql = 'UPDATE Products SET descricao = ? WHERE id = ?';

            $prepare = $this->pdo->prepare($this->sql);

            $prepare->bindParam(1, $descricao);
            $prepare->bindParam(2, $id);
            $prepare->execute();

            return $prepare->rowCount();
        }

        public function delete(int $id): int
        {
            $this->sql = 'DELETE FROM Products WHERE id = ?';

            $prepare = $this->pdo->prepare($this->sql);

            $prepare->bindParam(1, $id);
            $prepare->execute();

            return $prepare->rowCount();
        }


    }