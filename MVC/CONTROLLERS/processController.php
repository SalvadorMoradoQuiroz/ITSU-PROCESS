<?php
//include_once('../MODELS/processModel.php');
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

    public function consultSpecificProcess($idProcess){
        return $this->objProcessModel->consultSpecificProcess($idProcess);
    }

    public function updateProcess($idProcess, $title, $description, $video, $image, $document, $department){
        return $this->objProcessModel->updateProcess($idProcess, $title, $description, $video, $image, $document, $department);
    }

    public function deleteProcess($idProcess){
        return $this->objProcessModel->deleteProcess($idProcess);
    }

    public function consultProcessByWordKey($wordKey){
        return $this->objProcessModel->consultProcessByWordKey($wordKey);
    }
}
