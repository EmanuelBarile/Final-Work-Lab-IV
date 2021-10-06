<?php
    namespace Models;

    class User
    {
        private $email;
        private $password;
        private $type;   //-- A= Administrador  U= Usuario comun

        public function getEmail()
        {
            return $this->email;
        }

        public function setEmail($email)
        {
            $this->email = $email;
        }

        public function getPassword()
        {
            return $this->password;
        }

        public function setPassword($password)
        {
            $this->password = $password;
        }

        public function getType()
        {
            return $this->type;
        }

        public function setType($type)
        {
            $this->type = $type;
        }

        //Crear metodo de encriptación de contraseña
    }
?>