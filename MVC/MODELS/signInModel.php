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
            print("Conexion exitosa!!!");
        }
        catch(Exception $e){
            print($e->getMessage());
            print("Error!!!");
        }
    }

    public function altasUsers($name, $userName, $lastNameF, $lastNameS, $email, $phone, $department, $pass){
        try{
            $sentenciaSQL = "INSERT INTO users (name, userName, lastNameF, lastNameS, email, phone, department, pass) VALUES('$name', '$userName', 
            '$lastNameF', '$lastNameS', '$email', '$phone', '$department', '$pass');";
            $this->con->query($sentenciaSQL);
            return "Datos ingresados correctamente!";
        }catch(Exception $e){
            return "Error al insertar los datos en la BD!";
        }
    }
}