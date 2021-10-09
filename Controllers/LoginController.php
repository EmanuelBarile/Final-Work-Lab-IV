<?php
    namespace Controllers;
  
    use DAO\UserDAO as UserDAO;
    use Models\User as User;
  
    class LoginController
    {
        private $UserDAO;
  
        public function __construct()
        {
            $this->UserDAO = new UserDAO();
        }
        
        public function ShowStudentView()
        {
            require_once(VIEWS_PATH."profile-student.php");
        }

        public function ShowAdminView()
        {
            require_once(VIEWS_PATH."profile-admin.php");
        }
        
        public function validation($current_user, $current_pass)
        {
            //die(var_dump($current_user));
            $usuarios_registrados =  ($this->UserDAO)->GetAll();
            $valid_user = new User();
            for ($i = 0; $i <= sizeof($usuarios_registrados) - 1; $i++) {
                if($usuarios_registrados[$i]->getEmail() == $current_user && $usuarios_registrados[$i]->getPassword() == $current_pass)
                    $valid_user = $usuarios_registrados[$i];
            }
            if(isset($valid_user)){
                if($valid_user->getType() == "C")
                    $this->ShowStudentView();
                if($valid_user->getType() == "C")
                    $this->ShowAdminView();
            }
        }  
       
      }
?>
