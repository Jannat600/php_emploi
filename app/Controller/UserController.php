<?php

namespace Controller;
use Entity\User;
use Repository\Repository;
use Repository\UserRepository;





class UserController extends Controller
{

    public function __construct(){
        session_start();
    }
    

    private function creatUserSession(User $user)
    {

        $_SESSION["username"] = $user->getUserName();
        $_SESSION["email"] = $user->getEmail();

        if ($_SESSION["userName"])
            header("location: /articlemvc");
        $this->showErreur("Oups", "/articlemvc?action=Login");
    }

    public function validateUser(array $input)

    {   $repo= new Repository;
        $userRepo = new UserRepository();
        $input = [
            'username/email' => trim($_POST['username/email']),
            'password' => trim($_POST['password']) ];
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
                }
                
                return $usr ;
            }
            return null;

    }

    public function Login()
    {   $Repo = new Repository();
        $userRepo=new UserRepository;
        $input = [
            'username/email' => trim($_POST['username/email']),
            'password' => trim($_POST['password']),
        ];
        if (empty($input['username/email']) || empty($input['password'])) {
            $this->showErreur("Merci d'entrer votre username ou votre adresse mail", "/articlemvc?action=Login");
        }
        
        if ($userRepo->findByEmailOrUserName($input["username/email"]))
         {
            $loggedInUser = $this->validateUser($input);
            if ($loggedInUser != null) {
                $this->creatUserSession($loggedInUser);
            }
            $this->showErreur("Login ou Mot de passe erronés", "/articlemvc?action=Login");
        }
        $this->showErreur("Compte introuvable, avez-vous un compte ? ", "/articlemvc?action=Login");
    }



    public function Register()
    {

        $Repo = new Repository();
        $usr= new User();

        $input = [
            'username' => trim($_POST['username']),
            'id_upf' => trim($_POST['id_upf']),
            'role' => trim($_POST['role']),
            'email' => trim($_POST['email']),
            'password' => trim($_POST['password'])
        ];

        if (empty($input['username']) || empty($input['id_upf']) || empty($input['role']) || empty($input['email']) || empty($input['password'])) {
            $this->showErreur("Veuillez saisir  vos informations", "/articlemvc?action=Login");
        }



        if (!filter_var($input['email'], FILTER_VALIDATE_EMAIL) || $Repo->findBy($usr, (array)$input['email']) != null) {

            $this->showErreur("Email Invalide", "/articlemvc?action=Login");
        }

      
        

        if ($Repo->findBy($usr,(array)$input["username"])) {
            $this->showErreur("Nom d'utilisateur déjà pris. Essayez-en un autre", "/articlemvc?action=Login");
        }
        $usr= new User();
        $usr->setId($input['id']);
        $usr->setUsername($input['username']);
        $usr->setPassword($input['password']);
        $usr->setId_upf($input['id_upf']);
        $usr->setRole($input['role']);
        $usr-> setEmail($input['email']);
        if ($Repo->create($usr)) {
            header("location: /articlemvc?action=Login");
        } else {
            $this->showErreur("Un problème est survenu. Veuillez contacter l'administration", "/articlemvc");
        }
    }

        public function ViewHandler(){
            $this->render('Auth\login.view');
        }
    
}
