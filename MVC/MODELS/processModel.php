<?php
class ProcessModel
{
    private $user = "root";
    private $pass = "";
    private $host = "127.0.0.1";
    private $db = "processitsu";
    private $con;

    public function __construct()
    {
        try {
            $this->con = new mysqli($this->host, $this->user, $this->pass, $this->db);
            $this->con->set_charset("utf8");
        } catch (Exception $e) {
        }
    }

    public function altaProcess($title, $description, $video, $image, $document, $department)
    {
        try {
            $sentenciaSQL = "INSERT INTO process (title, description, 	video, 	image, document, department) VALUES('$title', 
            '$description', '$video', '$image', '$document', '$department');";
            $this->con->query($sentenciaSQL);
            return "Proceso registrado con éxito!";
        } catch (Exception $e) {
            return "Error al registrar el proceso!, ¡Intenta de nuevo!";
        }
    }

    public function consultProcessByWordKey($wordKey)
    {
        try {
            $sentenciaSQL = "SELECT idProcess, title FROM process WHERE title LIKE '%$wordKey%' ;";
            return $this->con->query($sentenciaSQL);
        } catch (Exception $e) {
            return "¡Error al consultar los procesos!";
        }
    }

    public function consultProcess($idDepartment)
    {
        try {
            $sentenciaSQL = "SELECT idProcess, title FROM process WHERE department	= $idDepartment;";
            return $this->con->query($sentenciaSQL);
        } catch (Exception $e) {
            return "¡Error al consultar los procesos!";
        }
    }

    public function consultSpecificProcess($idProcess)
    {
        try {
            $sentenciaSQL = "SELECT * FROM process WHERE idProcess	= $idProcess;";
            return $this->con->query($sentenciaSQL);
        } catch (Exception $e) {
            return "¡Error al consultar el proceso!";
        }
    }

    public function deleteProcess($idProcess)
    {
        try {
            $sentenciaSQL = "DELETE FROM process WHERE idProcess = $idProcess;";
            $this->con->query($sentenciaSQL);
            return "¡Proceso eliminado!";
        } catch (Exception $e) {
            return "¡Error al eliminar el proceso!";
        }
    }

    public function updateProcess($idProcess, $title, $description, $video, $image, $document, $department)
    {
        try {
            $sentenciaSQL = "UPDATE  process SET title='$title', description='$description', video='$video', image='$image', document='$document', department='$department' WHERE idProcess='$idProcess';";
            $this->con->query($sentenciaSQL);
            return "¡Se actualizarón los datos del proceso!";
        } catch (Exception $e) {
            return "¡Error al actualizar los datos del proceso!";
        }
    }
}
