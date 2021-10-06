<?php
    namespace DAO;
    require "../DAO/IUserDAO.php";
    require "../Config/Config.php";

    use DAO\IUserDAO as IUserDAO;
    use Models\User as User;

    class UserDAO implements IUserDAO
    {
        private $UserList = array();

        public function Add(User $User)
        {
            $this->RetrieveData();
            
            array_push($this->UserList, $User);

            $this->SaveData();
        }

        public function GetAll()
        {
            $this->RetrieveData();

            return $this->UserList;
        }

        private function SaveData()
        {
            $arrayToEncode = array();

            foreach($this->UserList as $User)
            {
                $valuesArray["email"] = $User->getEmail();
                $valuesArray["password"] = $User->getPassword();
                $valuesArray["type"] = $User->getType();

                array_push($arrayToEncode, $valuesArray);
            }

            $jsonContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT);
            
            file_put_contents('../Data/Users.json', $jsonContent);
        }

        private function RetrieveData()
        {
            $this->UserList = array();

            if(file_exists('../Data/Users.json'))
            {
                $jsonContent = file_get_contents('../Data/Users.json');

                $arrayToDecode = ($jsonContent) ? json_decode($jsonContent, true) : array();

                foreach($arrayToDecode as $valuesArray)
                {
                    $User = new User();
                    $User->setEmail($valuesArray["email"]);
                    $User->setPassword($valuesArray["password"]);
                    $User->setType($valuesArray["type"]);

                    array_push($this->UserList, $User);
                }
            }
        }
    }
?>