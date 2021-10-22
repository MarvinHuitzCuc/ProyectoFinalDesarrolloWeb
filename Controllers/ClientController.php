<?php
class ClientController extends Controllers
{
    public function __construct() {
        parent::__construct();
     }
    public function Register()
    {
        if (null != Session::getSession("User")) {
            $model1 = Session::getSession("model1");
            $model2 = Session::getSession("model2");
            if(null != $model1 || null != $model2){
                $array1 = unserialize( $model1);
                $array2 = unserialize( $model2);
                if(is_array($array1) && is_array($array2)){
                    $model1 = $this->TClient($array1);
                    $model2 = $this->TClient($array2);
                    $this->view->Render($this,"register",$model1,$model2,null);
                }else{
                    $this->view->Render($this,"register",null,null,null); 
                }
            }else{
                $this->view->Render($this,"register",$this->TClient(array()),null,null); 
            }
        } else {
            header("Location:".URL);
        } 
    }
    public function AddClient(){
        $user = Session::getSession("User");
        if(null != $user){
            if ("Admin"== $user["Role"]){
                $execute = true;
                $image = null;
                if (empty($_POST["nid"])){
                   $nid = "Ingrese el nid";
                   $execute = false;
                }
                if (empty($_POST["name"])){
                    $name = "Ingrese el nombre";
                    $execute = false;
                }
                if (empty($_POST["lastname"])){
                    $lastname = "Ingrese el apellido";
                    $execute = false;
                }
                if (empty($_POST["email"])){
                    $email = "Ingrese el email";
                    $execute = false;
                }else{
                    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
                        $email = "Ingrese un email valido";
                        $execute = false;
                    }
                }
            
                if (empty($_POST["phone"])){
                    $phone = "Ingrese el telefono";
                    $execute = false;
                }
                if (empty($_POST["direction"])){
                    $direction = "Ingrese la direccion";
                    $execute = false;
                }
            
                if (isset($_FILES['file'])){
                    $archivo =  $_FILES['file']["tmp_name"];
                    if($archivo != null){
                        $contents = file_get_contents($archivo); 
                       $image = base64_encode($contents);
                    }else{
                        $model1 = Session::getSession("model1");
                        if(null != $model1){
                            $array1 = unserialize($model1);
                            $image = $array1["Image"];
                        }else{
                            $img = file_get_contents(URL.RQ."images/default.png"); 
                            $image = base64_encode($img);
                        }
                    }
                }
                $model1 = array(
                    "IdClient"=>$_POST["idclient"] ?? null,
                    "NID"=>$_POST["nid"] ?? null,
                    "Name"=>$_POST["name"] ?? null,
                    "LastName"=>$_POST["lastname"] ?? null,                            
                    "Email"=>$_POST["email"] ?? null,
                    "Phone"=>$_POST["phone"] ?? null,
                    "Direction"=>$_POST["direction"] ?? null,
                    "Image"=>$image ?? null,
                    "Credit"=>$_POST["credit"] ?? null
                 );
                Session::setSession('model1',serialize($model1));
                if ($execute){
                    $value = $this->model->AddClient(
                        $this->TClient($model1), 
                        $this->TReports_clients(array())
                    );
                    if (is_numeric($value)){
                        Session::setSession('model1',"");
                        Session::setSession('model2',"");
                        if ($value == 0) {
                            header('Location: Client');
                        } else {
                            header('Location: '.URL.'Client/Details/'.$value);
                        }
                        
                        
                    }else{
                        Session::setSession('model2',serialize(array(
                            "Credit"=>$value,
                        )));
                        header('Location: Register');
                    }
                   
                }else{
                    Session::setSession('model2',serialize(array(
                        "NID"=>$nid ?? null,
                        "Name"=>$name ?? null,
                        "LastName"=>$lastname ?? null,
                        "Email"=>$email ?? null,
                        "Phone"=>$phone ?? null,
                        "Direction"=>$direction ?? null,
                        "Credit"=>$_POST["credit"] ?? null
                    )));
                    header('Location: Register');
                }
                
            }else{
                Session::setSession('model1',serialize(array()));
                Session::setSession('model2',serialize(array(
                    "Email"=>"No cuenta con los permisos requeridos para ejecutar esta acción",
                )));
                header('Location: Register');
            }
        }
    }
    public function Client($page)
    {
        if (null != Session::getSession("User")) {
            $filter = (isset($_GET["filtrar"])) ? $_GET["filtrar"] : "" ;
            $response = $this->model->GetClients($this->paginador,$filter,
            $page,1,"Client/Client",URL);
            if (is_array($response)){
                if (0 < count($response["results"])){
                    $response =$response;
                }else{
                    $response = array(
                        "results" => null,
                        "pagi_info" => null,
                        "pagi_navegacion" => "No hay datos que mostrar"
                    );
                }
            }else{
                $response = array(
                    "results" => null,
                    "pagi_info" => null,
                    "pagi_navegacion" => $response
                );
            }
            $this->view->Render($this,"client",$response,null,null);
        } else {
            header("Location:".URL);
        } 
    }
    public function Details($id){
        if (null != Session::getSession("User")){
            $response = $this->model->GetClients(null,$id,
            null,null,null,null);
            if (is_array($response)){
                if (0 < count($response["results"])){
                    $this->view->Render($this,"details",$response["results"],null,null);
                }else{
                    header('Location: Client/Client');
                }
            }else{
                header('Location: Client/Client');
            }
        }else{
            header("Location:".URL); 
        }
    }
    public function Cancel(){
        Session::setSession('model1',"");
        Session::setSession('model2',"");
        header('Location: Register');
    }
}

?>