<?php
class MessagesController{
    private $objMessagesModel;

    public function __construct(){
        $this->objMessagesModel = new MessagesModel();
    }

    public function registerMessage($message){
        return $this->objMessagesModel->registerMessage($message);
    }

    public function consultAllMessages(){
        return $this->objMessagesModel->consultAllMessages();
    }
}
?>