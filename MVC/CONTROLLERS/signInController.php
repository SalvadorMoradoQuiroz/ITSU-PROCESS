<?php
include_once('../MODELS/signInModel.php');
class SignInController{
    private $objModelSignIn;

    public function __construct(){
        $this->objModelSignIn = new SignInModel();
    }

    public function altasUsers($name, $userName, $lastNameF, $lastNameS, $email, $phone, $department, $pass){
        return $this->objModelSignIn->altasUsers($name, $userName, $lastNameF, $lastNameS, $email, $phone, $department, $pass);
    }
}
?>