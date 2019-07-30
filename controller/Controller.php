<?php
require_once '../model/DAO.php';

class Controller{

  public function Reservation(){
   include 'reservation.php';
}


public function insertReservation(){
  $name= isset($_GET['name'])?$_GET['name']:'';
  $email= isset($_GET['email'])?$_GET['email']:'';
  $mobile= isset($_GET['mobile'])?$_GET['mobile']:'';
  $datetime= isset($_GET['datetime'])?$_GET['datetime']:'';
  $numberpersons= isset($_GET['numberpersons'])?$_GET['numberpersons']:'';
  $labeltable= isset($_GET['labeltable'])?$_GET['labeltable']:'';

  $errors=array();
  if(empty($name)){
      $errors['name']='Please enter your name';
  }
  if(empty($email)){
    $errors['email']='Please enter your email';
  }
  if(empty($mobile)){
    $errors['mobile']='Please enter your phone number';
  }
  if(empty($date)){
    $errors['datetime']='Please select date and time';
  }
  if(empty($numberpersons)){
    $errors['numberpersons']='Please enter number of persons for reservation';
  }
  if(empty($labeltable)){
    $errors['labeltable']='Please select which table you like';
  }
 

  if(count($errors)==0){
  
    $dao=new DAO();
    // metoda iz Controllera
    // upisuje podatke u bazu
    $dao->insertReservation($name,$email,$mobile,$datetime,$numberpersons,$labeltable);
   
    $msg="Success. Reservation is saved.";
    // vracamo na istu stranu
    include 'reservation.php';
   }else{
   
    $msg="Please fill in all data in form";
    // vracamo na istu stranu
    include 'reservation.php';

}
}


public function allReservations()
{
  $dao = new DAO();
  $reservations = $dao->getAllReservations();

  // $reservations (ovo je dostupno na ovoj strani)
  include 'allreservations.php';
}

}
?>