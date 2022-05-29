<?php
class LogInController{
    private $objModelSignIn;

    public function __construct(){
        $this->objModelLogIn = new LogInModel();
    }

    public function verifyUser($email, $pass){
        return $this->objModelLogIn->verifyUser($email, $pass);
    }
}
?>