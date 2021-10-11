<?php 

namespace DAO;

use Models\Company as Company;

interface ICompanyDAO{
	public function Add(Company $company);
    public function Remove($companyName);
	public function GetAll();
}

?>