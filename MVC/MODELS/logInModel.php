<?php
class LogInModel{
    private $user="root";
    private $pass="";
    private $host="127.0.0.1";
    private $db="processitsu";
    private $con;

    public function __construct()
    {
        try{
            $this->con= new mysqli($this->host,$this->user,$this->pass,$this->db);
            $this->con->set_charset("utf8");
        }
        catch(Exception $e){
          
        }
    }

    public function verifyUser($email, $pass){
        if($this->existsUser($email)){
            try {
                $sentenciaSQL = "SELECT pass FROM users WHERE email='" . $email . "';";
                $res = $this->con->query($sentenciaSQL)->fetch_assoc();

                if(strcmp($pass, strval($res['pass']))==0){
                    return "¡Credenciales correctas!";
                }else{
                    return "¡El email o contraseña no son correctos!";
                }
            } catch (Exception $e) {
                return "¡Error, intenta de nuevo!";
            }
        }else{
            return "¡No existe el usuario!";
        }
    }

    private  function existsUser($email){
        try {
            $sentenciaSQL = "SELECT * FROM users WHERE email='" . $email . "';";
            $res = $this->con->query($sentenciaSQL)->fetch_assoc();

            if (!is_null($res)) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            return false;
        }
    }


}