<?php
    namespace Controllers;
  
    use DAO\UserDAO as UserDAO;
    use Models\User as User;
  
    class UserController
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
        
        public function login($email, $contrasenia, $button)
        {
            //die(var_dump($current_user));
            $usuarios_registrados =  ($this->UserDAO)->GetAll();
            for ($i = 0; $i <= sizeof($usuarios_registrados) - 1; $i++) {
                if($usuarios_registrados[$i]->getEmail() == $email && $usuarios_registrados[$i]->getPassword() == $contrasenia){
                    $valid_user = new User();
                    $valid_user = $usuarios_registrados[$i];
                }
            }
            if(isset($valid_user)){
                if($valid_user->getType() == "U")
                    $this->ShowStudentView();
                if($valid_user->getType() == "A"){
                    $this->ShowAdminView();
                }
            }else{
                require_once(VIEWS_PATH."login.php");
            }
        }  
       
      }
?>
