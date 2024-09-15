<?php

    class Employee{

        // PROPERTIES
        private $name;
        private $salary;

        // CONSTRUCTOR
        public function __construct($name, $salary)
        {
            $this->name     = $name;
            $this->salary   = $salary;
        }

        // GETTER & SETTER
        public function getName(){
            return $this->name;
        }

        public function getSalary(){
            return $this->salary;
        }

        public function setName($name){
            return $this->name = $name;
        }

        public function setSalary($salary){
            return $this->salary = $salary;
        }
    }