<?php
class MessagesModel
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

    public function registerMessage($message)
    {
        try {
            $formated_DATETIME = date('Y-m-d H:i:s');
            $sentenciaSQL = "INSERT INTO messages (message, date) VALUES('$message', '$formated_DATETIME');";
            $this->con->query($sentenciaSQL);
            return "¡Mensaje registrado con éxito!";
        } catch (Exception $e) {
            return "¡Error al registrar el mensaje!, ¡Intenta de nuevo!";
        }
    }

    public function consultAllMessages()
    {
        try {
            $sentenciaSQL = "SELECT * FROM messages;";
            return $this->con->query($sentenciaSQL);
        } catch (Exception $e) {
            return "¡Error al consultar los mensajes!";
        }
    }

}