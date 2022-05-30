<?php
class ProcessModel{
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

    public function altaProcess($title, $description, $video, $image, $document, $department ){
        try{
            $sentenciaSQL = "INSERT INTO process (title, description, 	video, 	image, document, department) VALUES('$title', 
            '$description', '$video', '$image', '$document', '$department');";
            $this->con->query($sentenciaSQL);
            return "Proceso registrado con éxito!";
        }catch(Exception $e){
            return "Error al registrar el proceso!, ¡Intenta de nuevo!";
        }
    }
}
