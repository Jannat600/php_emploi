<?php

namespace Controller;
use Entity\User;
use Repository\Repository;
use Repository\UserRepository;
use view\viewManager;





class UserController extends Controller
{
  


    private function creatUserSession(User $user)
    {   
       
        session_start();
        $_SESSION["username"] = $user->getUserName();
        echo $user->getUserName();
        $_SESSION["email"] = $user->getEmail();

        if ($_SESSION["username"])
          header("location: http://localhost/php_emploi/public/index.php?action=Admin&username=".$_SESSION['username']);
        //$this->showErreur("Oups", "\Auth\login.view\?action=Login");
    }

    public function validateUser($input)

    {   $repo= new Repository;
        $userRepo = new UserRepository();
        
        $test= $userRepo->findByEmailOrUserName ($input["username/email"]);
            if( $test !=NULL)
            { 
                if($test['password']==$input["password"])
                {
                  
                     $usr= new User();
                        $usr->setId($test['id']);
                        $usr->setUsername($test['username']);
                        $usr->setPassword($test['password']);
                        $usr->setId_upf($test['id_upf']);
                        $usr->setRole($test['role']);
                        $usr-> setEmail($test['email']);
                        return $usr ;
                }
                
                
            }
            return null;

    }

    public function Login()
    {  
        
        // echo "je suis dans Login";
        //print_r ($_POST);
        $Repo = new Repository();
        $userRepo=new UserRepository;
        $input = [
            'username/email' => $_POST['username/email'],
            'password' => $_POST['password'],
        ];
        if (empty($input['username/email']) ||
             empty($input['password'])) {
            $this->showErreur("Merci d'entrer votre username ou votre adresse mail", "\Auth\login.view\?action=/");
        }
        
        if ($userRepo->findByEmailOrUserName($input["username/email"]))
         {
              
            $visitor = $this->validateUser($input);
            if ($visitor != null) {
                $this->creatUserSession($visitor);
            }
            else{ $this->showErreur("Login ou Mot de passe erronés", "\Auth\login.view\?action=/");}
           
        }
        else{ $this->showErreur("Compte introuvable, avez-vous un compte ? ", "\Auth\login.view\?action=/");}
       
    }



    public function Register()
    {
        $Repo = new Repository();
        $usr= new User();

        $input = [
            'username' => $_POST['username'],
            'password' => $_POST['password'],
            'email' => $_POST['email'],
            'role' => $_POST['role'],
            'id_upf' => $_POST['id_upf'],

        ];


        if (   empty($input['username']) || 
            //  empty($input['id_upf']) || 
            // empty($input['role']) ||
             empty($input['email']) || 
             empty($input['password'])) {
            $this->showErreur("Veuillez saisir  vos informations", "\Auth\login.view\?action=/");
        }



        if (!filter_var($input['email'], FILTER_VALIDATE_EMAIL) || $Repo->findBy($usr, (array)$input['email']) != null) {

            $this->showErreur("Email Invalide", "\Auth\login.view\?action=/");
            $this->deleteUser($input["username"]);

        }
        

        if ($Repo->findBy($usr,(array)$input["username"])) {
            $this->showErreur("Nom d'utilisateur déjà pris. Essayez-en un autre", "\Auth\login.view\?action=/");
            $this->deleteUser($input["username"]);
        }
        
        
        $usr->setUsername($input['username']);
        $usr->setPassword($input['password']);
        $usr->setId_upf($input['id_upf']);
        $usr->setRole($input['role']);
        $usr-> setEmail($input['email']);

        

        $Repo->create($usr);
        if ($Repo->create($usr)) {
            header("http://localhost/php_emploi/public/index.php?action=Admin");
        } 
        else {
            $this->showErreur("Un problème est survenu. Veuillez contacter l'administration", "\Auth\login.view\?action=/");
        }
    }

    public function logout(){

        session_start();
        unset($_SESSION["username"]);
        session_destroy();
        header("Location:http://localhost/php_emploi/public/index.php\?action=/");
    
    }

    public function deleteUser($username){
        $repo= new Repository();
        $usr=new User();
        $user= $repo->findBy($usr,$username);
        $id=$user["id"];
       $repo->delete($usr,$id);

    }

    
}
