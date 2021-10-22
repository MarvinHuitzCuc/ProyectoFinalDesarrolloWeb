<?php
class Client_model extends Connection
{
    public function __construct(){
        parent::__construct();
    }
    public function AddClient($model1,$model2){
        try {
            $this->db->pdo->beginTransaction();
            $model1->Credit = $model1->Credit == null ? 0 : 1;
            $where = " WHERE Email = :Email";
            $response = $this->db->Select1("*",'tclients',$where,array('Email' => $model1->Email));
            if (is_array($response)){
                $response = $response['results'];
                if (0 == $model1->IdClient){
                    if (0 == count($response)){
                        $model1->State = true;
                        $model1->Date = date("Y-m-d");
                        $query1 = "INSERT INTO tclients (IdClient,NID,Name,LastName,Email,Phone,Direction,Image,Credit,Date,State) VALUES (:IdClient,:NID, :Name,:LastName,:Email,:Phone,:Direction,:Image,:Credit,:Date,:State)";

                        $sth = $this->db->pdo->prepare($query1);
                        $sth->execute((array)$model1);
                        $id = $this->db->pdo->lastInsertId();

                        $model2->Debt = 0;
                        $model2->Monthly = 0;
                        $model2->Changes = 0;
                        $model2->LastPayment = 0;
                        $model2->DatePayment = null;
                        $model2->CurrentDebt = 0;
                        $model2->DateDebt = null;
                        $model2->Ticket = "0000000000";
                        $model2->Deadline = null;
                        $model2->IdClient = $id;

                        $query2 = "INSERT INTO treports_clients (IdReport,Debt,Monthly,Changes,LastPayment,DatePayment,CurrentDebt,DateDebt,Ticket,Deadline,IdClient) VALUES (:IdReport,:Debt,:Monthly,:Changes,:LastPayment,:DatePayment,:CurrentDebt,:DateDebt,:Ticket,:Deadline,:IdClient)";

                        $sth = $this->db->pdo->prepare($query2);
                        $sth->execute((array)$model2);
                    }else{
                        return "El correo ya esta registrado";
                    }
                }else{
                    $model1->State = $response[0]["State"];
                    $model1->Date = $response[0]["Date"];
                    $query2 =  "UPDATE tclients SET IdClient = :IdClient,NID = :NID,Name = :Name,LastName = :LastName,Email = :Email,Phone = :Phone,Direction = :Direction,Image = :Image,Credit = :Credit,State = :State,Date = :Date WHERE IdClient = ".$model1->IdClient;
                    if ( 0 == count( $response ) ){
                        $sth = $this->db->pdo->prepare($query2);
                        $sth->execute((array)$model1);
                    }else{
                        if($model1->IdClient == $response[0]["IdClient"]){
                            $sth = $this->db->pdo->prepare($query2);
                            $sth->execute((array)$model1);
                        }else{
                            return 'El correo ya esta registrado';
                        }
                    }
                }
                $this->db->pdo->commit();
                return $model1->IdClient;
            }else{
                return $response;
            }
        } catch (\Throwable $th) {
            $this->db->pdo->rollBack();
            return $th->getMessage();
        }
    }
    public function GetClients($paginador,$filter,$page,$register,$method,$url){
        if($paginador != null){
            $where = " WHERE Name LIKE :Name OR LastName LIKE :LastName OR Email LIKE :Email";
            $array = array(
                'Name' => '%'.$filter.'%',
                'LastName' => '%'.$filter.'%',
                'Email' => '%'.$filter.'%'
            );
            return $paginador->paginador("*","tclients",$method,$register,$page,$where,$array,$url);
        }else{
            $where = " WHERE IdClient = :IdClient";
            return  $this->db->Select1("*",'tclients',$where,array('IdClient' => $filter));
        }
    }
}

?>