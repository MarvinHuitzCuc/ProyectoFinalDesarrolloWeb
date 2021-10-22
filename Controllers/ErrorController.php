<?php
class ErrorController extends Controllers{
    public function __construct() {
        parent::__construct();
    }
    public function Error($url){
        $this->view->Render($this,"error",$url,null,null);
    }
}
// En este se controla los errores que se puedan generar en el proyecto, en los diferentes controladores
?>