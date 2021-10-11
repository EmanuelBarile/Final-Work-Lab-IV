<?php
    namespace Controllers;

    Use DAO\CompanyDAO as CompanyDAO;
    Use Models\Company as Company;

    class CompanyController
    {
        private $companyDAO = new CompanyDAO();

        public function ShowAddView()
        {
            require_once(VIEWS_PATH."company-add.php");
        }

        public function ShowListView()
        {
            require_once(VIEWS_PATH."company-list.php");
        }

        public function Add($name, $foundationYear, $city, $description, $logo, $email, $phoneNumber)
        {
            /*Las validaciónes de los atributos irían dentro de este método ?*/

            $company = new Company($name,$foundationYear,$city,$description,$logo,$email,$phoneNumber);

            $this->companyDAO->Add($company);

            $this->ShowAddView();
        }
        

        /*Debería agregar también el metodo de remove aunque esté codeado en el DAO ?*/
        
        
    }
?>