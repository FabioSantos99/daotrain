<?php

include_once("models/Save.php");

class SaveDAO implements SaveDAOInterface{

      private $conn;

      public function __construct(PDO $conn){

            $this->conn = $conn;
      }

      public function findAll() {

            $saves = [];

            $stmt = $this->conn->query("SELECT * FROM collects");

            $data = $stmt->fetchAll();

            foreach($data as $item) {

                  $save = new Save();

                  $save->setId($item["id"]);
                  $save->setName($item["name"]);
                  $save->setLastname($item["lastname"]);
                  $save->setAge($item["age"]);
                  $save->setCountry($item["country"]);

                  $saves[] = $save;
            }

            return $saves;

      }
 
      public function create(Save $save) {

            $stmt = $this->conn->prepare("INSERT INTO collects (name, lastname, age, country) VALUES (:name, :lastname, :age, :country)");

            $stmt->bindValue(":name", $save->getName());
            $stmt->bindValue(":lastname", $save->getLastname());
            $stmt->bindValue(":age", $save->getAge());
            $stmt->bindValue(":country", $save->getCountry());
      
            $stmt->execute();

            
      }
}

