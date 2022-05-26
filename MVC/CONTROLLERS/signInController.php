<?php
//include_once('../MODELS/signInModel.php');
class SignInController{
    private $objModelSignIn;

    public function __construct(){
        $this->objModelSignIn = new SignInModel();
    }

    public function altasUsers($name, $lastNameF, $lastNameS, $email, $phone, $department, $pass, $activo){
        return $this->objModelSignIn->altasUsers($name, $lastNameF, $lastNameS, $email, $phone, $department, $pass, $activo);
    }
}
?>