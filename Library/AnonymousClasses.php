<?php
// En esta clase se guardan temporalmente todos los datos que ingresa los usuarios
declare (strict_types = 1);
class AnonymousClasses
{
    public function TUser(array $array){
        return new class($array){
            public $IdUser = 0;
            public $NID;
            public $Name;
            public $LastName;
            public $Email;
            public $Password;
            public $Phone;
            public $Direction;
            public $User;
            public $Role;
            public $Image;
            public $Is_active;
            public $State;
            public $Date;
            function __construct($array){
                if(0 < count($array)){
                    if (!empty($array["IdUser"])) {$this->IdUser = $array["IdUser"];}
                    if (!empty($array["NID"])) {$this->NID = $array["NID"];}
                    if (!empty($array["Name"])){$this->Name = $array["Name"];}
                    if (!empty($array["LastName"])){$this->LastName = $array["LastName"];}
                    if (!empty($array["Email"])){$this->Email = $array["Email"];}
                    if (!empty($array["Password"])){$this->Password = $array["Password"];}
                    if (!empty($array["Phone"])){$this->Phone = $array["Phone"];}
                    if (!empty($array["Direction"])){$this->Direction = $array["Direction"];}
                    if (!empty($array["User"])){$this->User = $array["User"];}
                    if (!empty($array["Role"])){$this->Role = $array["Role"];}
                    if (!empty($array["Image"])){$this->Image = $array["Image"];}
                    if (!empty($array["Is_active"])){$this->Is_active = $array["Is_active"];}
                    if (!empty($array["State"])){$this->State = $array["State"];}
                    if (!empty($array["Date"])){$this->Image = $array["Date"];}
                }
            }
        };
    }
//se crean clases sin nombre por ello el nombre de clases Anonymous
    public function TClient(array $array){
        return new class($array){
            public $IdClient = 0;
            public $NID;
            public $Name;
            public $LastName;
            public $Email;
            public $Phone;
            public $Direction;
            public $Image;
            public $Credit;
            public $Date;
            public $State;
             //contructor si el array contiene informacion
            function __construct($array){
                if(0 < count($array)){
                    if (!empty($array["IdClient"])) {$this->IdClient = $array["IdClient"];}
                    if (!empty($array["NID"])) {$this->NID = $array["NID"];}
                    if (!empty($array["Name"])){$this->Name = $array["Name"];}
                    if (!empty($array["LastName"])){$this->LastName = $array["LastName"];}
                    if (!empty($array["Email"])){$this->Email = $array["Email"];}
                    if (!empty($array["Phone"])){$this->Phone = $array["Phone"];}
                    if (!empty($array["Direction"])){$this->Direction = $array["Direction"];}
                    if (!empty($array["Image"])){$this->Image = $array["Image"];}
                    if (!empty($array["Credit"])){$this->Credit = $array["Credit"];}
                    if (!empty($array["Date"])){$this->Date = $array["Date"];}
                    if (!empty($array["State"])){$this->State = $array["State"];}
                }
            }
        };
    }
    public function TReports_clients(array $array){
        return new class($array){
            public $IdReport = 0;
            public $Debt;
            public $Monthly;
            public $Changes;
            public $LastPayment;
            public $DatePayment;
            public $CurrentDebt;
            public $DateDebt;
            public $Ticket;
            public $Deadline;
            public $IdClient;
            function __construct($array){
                if(0 < count($array)){
                    if (!empty($array["IdReport"])) {$this->IdReport = $array["IdReport"];}
                    if (!empty($array["Debt"])) {$this->Debt = $array["Debt"];}
                    if (!empty($array["Monthly"])){$this->Monthly = $array["Monthly"];}
                    if (!empty($array["Change"])){$this->Changes = $array["Change"];}
                    if (!empty($array["LastPayment"])){$this->LastPayment = $array["LastPayment"];}
                    if (!empty($array["DatePayment"])){$this->DatePayment = $array["DatePayment"];}
                    if (!empty($array["CurrentDebt"])){$this->CurrentDebt = $array["CurrentDebt"];}
                    if (!empty($array["DateDebt"])){$this->DateDebt = $array["DateDebt"];}
                    if (!empty($array["Ticket"])){$this->Ticket = $array["Ticket"];}
                    if (!empty($array["Deadline"])){$this->Deadline = $array["Deadline"];}
                    if (!empty($array["IdClient"])){$this->IdClient = $array["IdClient"];}
                }
            }
        };
    }
    public function TProvider(array $array){
        return new class($array){
            public $IdClient = 0;
            public $NID;
            public $Name;
            public $LastName;
            public $Email;
            public $Phone;
            public $Direction;
            public $Image;
            public $Credit;
            public $Date;
            public $State;
            function __construct($array){
                if(0 < count($array)){
                    if (!empty($array["IdClient"])) {$this->IdClient = $array["IdClient"];}
                    if (!empty($array["NID"])) {$this->NID = $array["NID"];}
                    if (!empty($array["Name"])){$this->Name = $array["Name"];}
                    if (!empty($array["LastName"])){$this->LastName = $array["LastName"];}
                    if (!empty($array["Email"])){$this->Email = $array["Email"];}
                    if (!empty($array["Phone"])){$this->Phone = $array["Phone"];}
                    if (!empty($array["Direction"])){$this->Direction = $array["Direction"];}
                    if (!empty($array["Image"])){$this->Image = $array["Image"];}
                    if (!empty($array["Credit"])){$this->Credit = $array["Credit"];}
                    if (!empty($array["Date"])){$this->Date = $array["Date"];}
                    if (!empty($array["State"])){$this->State = $array["State"];}
                }
            }
        };
    }
    public function TReports_provider(array $array){
        return new class($array){
            public $IdReport = 0;
            public $Debt;
            public $Monthly;
            public $Changes;
            public $LastPayment;
            public $DatePayment;
            public $CurrentDebt;
            public $DateDebt;
            public $Ticket;
            public $Deadline;
            public $IdClient;
            function __construct($array){
                if(0 < count($array)){
                    if (!empty($array["IdReport"])) {$this->IdReport = $array["IdReport"];}
                    if (!empty($array["Debt"])) {$this->Debt = $array["Debt"];}
                    if (!empty($array["Monthly"])){$this->Monthly = $array["Monthly"];}
                    if (!empty($array["Change"])){$this->Changes = $array["Change"];}
                    if (!empty($array["LastPayment"])){$this->LastPayment = $array["LastPayment"];}
                    if (!empty($array["DatePayment"])){$this->DatePayment = $array["DatePayment"];}
                    if (!empty($array["CurrentDebt"])){$this->CurrentDebt = $array["CurrentDebt"];}
                    if (!empty($array["DateDebt"])){$this->DateDebt = $array["DateDebt"];}
                    if (!empty($array["Ticket"])){$this->Ticket = $array["Ticket"];}
                    if (!empty($array["Deadline"])){$this->Deadline = $array["Deadline"];}
                    if (!empty($array["IdClient"])){$this->IdClient = $array["IdClient"];}
                }
            }
        };
    }
}

?>