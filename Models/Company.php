<?php

    namespace Models;

    class Company{

        private $name;
        private $foundationYear;
        private $city;
        private $description;
        private $logo;
        private $email;
        private $phoneNumber;

        function __construct($name, $foundationYear,$city,$description,$logo,$email,$phoneNumber)
        {
            $this->name = $name;
            $this->foundationYear = $foundationYear;
            $this->city = $city;
            $this->description = $description;
            $this->logo = $logo;
            $this->email = $email;
            $this->phoneNumber = $phoneNumber;
        }

        /*Getters & Setters*/

        public function getName()
        {
            return $this->name;
        }

        public function setName($name)
        {
            $this->name = $name;
        }

        public function getFoundationYear()
        {
            return $this->foundationYear;
        }

        public function setFoundationYear($foundationYear)
        {
            $this->foundationYear = $foundationYear;
        }

        public function getCity()
        {
            return $this->city;
        }

        public function setCity($city)
        {
            $this->city = $city;
        }
        
        public function getDescription()
        {
            return $this->description;
        }

        public function setDescription($description)
        {
            $this->description = $description;
        }

        public function getLogo()
        {
            return $this->logo;
        }

        public function setLogo($logo)
        {
            $this->logo = $logo;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function setEmail($email)
        {
            $this->email = $email;
        }

        public function getPhoneNumber()
        {
            return $this->phoneNumber;
        }

        public function setPhoneNumber($phoneNumber)
        {
            $this->phoneNumber = $phoneNumber;
        }


    }












?>