<?php
class Controller{ 
    protected $model;
    function __construct(){
        $this->view=new View();
    }
    function loadModel($model){
        $url='models/'.$model.'Model.php';
        if(file_exists($url)){
            require $url;
            $modelName=$model.'Model';
           $this->model=new $modelName();
           // echo "aqui estoy mal";
        }
    }
}

?>
