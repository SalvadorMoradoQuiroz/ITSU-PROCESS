<?php 
if(file_exists('../../PUBLIC/DATA/DOCS/Tareas.docx')){
    if (unlink('../../PUBLIC/DATA/DOCS/Tareas.docx')) {
        // file was successfully deleted
        echo 'file was successfully deleted';
    } else {
        // there was a problem deleting the file
        echo 'there was a problem deleting the file';
    }
}else{
    echo 'files is not exist';
}
?>

