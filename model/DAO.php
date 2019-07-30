<?php
require_once '../config/db.php';


class DAO{
    
    private $db;
    
    private $GETALLTABLES="SELECT * FROM tables";
    private $INSERTRESERVATION= "INSERT INTO reservation (name,email,mobile,datetime,numberpersons,labeltable) VALUES (?,?,?,?,?,?)";

    private $GETALLRESERVATIONS="SELECT * FROM reservation ORDER BY idreservation ASC";

    public function __construct(){
        $this->db= DB::createInstance();
    }



    public function getAllTables(){
      
      $statement = $this->db->prepare($this->GETALLTABLES);
      $statement->execute();

      $result = $statement->fetchAll();
      return $result;
    }

    
    public function  insertReservation($name,$email,$mobile,$datetime,$numberpersons,$labeltable)
    {
      $statement = $this->db->prepare($this->INSERTRESERVATION);
      $statement->bindValue(1,$name);
      $statement->bindValue(2,$email);
      $statement->bindValue(3,$mobile);
      $statement->bindValue(4,$datetime);
      $statement->bindValue(5,$numberpersons);
      $statement->bindValue(6,$labeltable);
      
     
      $statement->execute();
    }


    public function getAllReservations()
    {
      $statement = $this->db->prepare($this->GETALLRESERVATIONS);
      $statement->execute();
                          // sve rezultate iz baze
      $result = $statement->fetchAll();
      return $result;
    }


    
}



?>