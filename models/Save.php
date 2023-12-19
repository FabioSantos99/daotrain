<?php

class Save {

      private $id;
      private $name;
      private $lastname;
      private $age;
      private $country;

      public function getId() {

            return $this->id;
      }

      public function setId($id) {

            $this->id = $id;
      }
      
      public function getName() {

            return $this->name;
      }

      public function setName($name) {

            $this->name = $name;
      }
      public function getLastname() {

            return $this->lastname;
      }

      public function setLastname($lastname) {

            $this->lastname = $lastname;
      }

      public function getAge() {

            return $this->age;
      }

      public function setAge($age) {

            $this->age = $age;
      }

      public function getCountry() {

            return $this->country;
      }

      public function setCountry($country) {

            $this->country = $country;
      }
}


interface SaveDAOInterface {

      public function findAll();

      public function create(Save $save);

}

