<?php
include_once('../MODELS/processModel.php');
class ProcessController{
    private $objProcessModel;

    public function __construct(){
        $this->objProcessModel = new ProcessModel();
    }

    public function altaProcess($title, $description, $video, $image, $document, $department ){
        return $this->objProcessModel->altaProcess($title, $description, $video, $image, $document, $department );
    }

    public function consultProcess($idDepartment){
        return $this->objProcessModel->consultProcess($idDepartment);
    }
}
