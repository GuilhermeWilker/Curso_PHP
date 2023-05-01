<?php

    include_once 'models/Car.php';

    class CarDao implements CarDAOInterface
    {
        private $conn;

        public function __construct(PDO $conn)
        {
            $this->conn = $conn;
        }

        public function findall()
        {
            $car = [];

            $stmt = $this->conn->query('SELECT * FROM cars');

            $data = $stmt->fetchAll();

            foreach ($data as $item) {
                $car = new Car();
                $car->setId($car['id']);
                $car->setBrand($car['brand']);
                $car->setKm($car['km']);
                $car->setColor($car['color']);

                $cars[] = $car;
            }

            return $cars;
        }

        public function create(Car $car)
        {
            $stmt = $this->conn->prepare('INSERT INTO cars (brand, km, color) VALUES (:brand, :km, :color)');

            $stmt->bindParam(':brand', $car->getBrand());
            $stmt->bindParam(':km', $car->getKm());
            $stmt->bindParam(':color', $car->getColor());

            $stmt->execute();
        }
    }
