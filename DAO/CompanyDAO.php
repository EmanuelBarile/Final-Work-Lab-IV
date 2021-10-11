<?php

    namespace DAO;

    use DAO\ICompanyDAO as ICompanyDAO;
    use Models\Company as Company;

    class CompanyDAO implements ICompanyDAO
    {        
        private $companyList = array();
        private $fileName;

        /*Constructor*/

        public function __construct()
        {
            $this->fileName = dirname(__DIR__)."/Data/Companies.json";
        }


        /* Métodos */

        public function Add(Company $company)
        {
            $this->RetrieveData();
            
            array_push($this->companyList, $company);

            $this->SaveData();
        }

        public function Remove($companyName)
        {
            $this->RetrieveData();
    
            foreach($this->companyList as $company){
    
                if($company->getName == $companyName){
                    $key = array_search($company, $this->companyList);
                    unset($this->companyList[$key]);
                }
            }
    
            $this->SaveData();
        }

        public function GetAll()
        {
            $this->RetrieveData();

            return $this->companyList;
        }

        private function SaveData()
        {
            $arrayToEncode = array();

            foreach($this->companyList as $company)
            {
                $valuesArray["name"] = $company->getName();
                $valuesArray["foundationYear"] = $company->getFoundationYear();
                $valuesArray["city"] = $company->getCity();
                $valuesArray["description"] = $company->getDescription();
                $valuesArray["logo"] = $company->getLogo();
                $valuesArray["email"] = $company->getEmail();
                $valuesArray["phoneNumber"] = $company->getPhoneNumber();

                array_push($arrayToEncode, $valuesArray);
            }

            $jsonContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT);
            
            file_put_contents($this->fileName, $jsonContent);
        }

        private function RetrieveData()
        {
            $this->companyList = array();

            if(file_exists($this->fileName))
            {
                $jsonContent = file_get_contents($this->fileName);

                $arrayToDecode = ($jsonContent) ? json_decode($jsonContent, true) : array();

                foreach($arrayToDecode as $valuesArray)
                {
                    $company = new Company($valuesArray["name"],$valuesArray["foundationYear"],$valuesArray["city"],
                    $valuesArray["description"],$valuesArray["logo"],$valuesArray["email"],$valuesArray["phoneNumber"]);

                    array_push($this->companyList, $company);
                }
            }
        }
    }
?>