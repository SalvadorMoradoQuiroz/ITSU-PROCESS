<?php
include_once('../MODELS/ConexionBD.php');
class SignInController{
    private $objModelSignIn;

    public function __construct(){
        $this->objModelSignIn = new ConexionDB();
    }

    public function altasUsers($name, $userName, $lastNameF, $lastNameS, $email, $phone, $department, $pass){
        return $this->objModelSignIn->altasUsers($name, $userName, $lastNameF, $lastNameS, $email, $phone, $department, $pass);
    }
}
?>