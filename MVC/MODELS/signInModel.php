<?php
class SignInModel{
    private $user="root";
    private $pass="";
    private $host="127.0.0.1";
    private $db="processitsu";
    private $con;

    public function __construct()
    {
        try{
            $this->con= new mysqli($this->host,$this->user,$this->pass,$this->db);
            //print("Conexion exitosa!!!");
        }
        catch(Exception $e){
            //print($e->getMessage());
            //print("Error!!!");
        }
    }

    public function altasUsers($name, $lastNameF, $lastNameS, $email, $phone, $department, $pass, $activo){
        try{
            $sentenciaSQL = "INSERT INTO users (name, lastNameF, lastNameS, email, phone, department, pass, activo) VALUES('$name', 
            '$lastNameF', '$lastNameS', '$email', '$phone', '$department', '$pass', '$activo');";
            $this->con->query($sentenciaSQL);
            return "¡Usuario registrado con éxito!";
        }catch(Exception $e){
            return "Error al registrar el usuario!, ¡Intenta de nuevo!";
        }
    }
}