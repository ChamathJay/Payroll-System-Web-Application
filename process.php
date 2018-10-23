<?php
include_once "db.php";
session_start();
 if(!$_SESSION['email']){
    header("Location:index.php");
    exit();
 }

  if(isset($_POST['submit'])) {
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $middleName = $_POST['mi'];
    $sex = $_POST['gender'];
    $ssn= $_POST['ssn'];
    $dob = $_POST['dob'];
    $orangization = $_POST['organization'];
    $dept = $_POST['department'];
    $id= $_POST['emplid'];
    $position = $_POST['position'];
    $email = $_POST['email'];
    $zipcode = $_POST['zip'];
    $salary= $_POST['payrate'];
    $addressOne = $_POST['address_one'];
    $addressTwo = $_POST['address_two'];
    $apt= $_POST['apt'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $phone = $_POST['phone'];
    $health = $_POST['insurance'];
    $vision = $_POST['vision'];
    $dental = $_POST['dental'];

   $query = "INSERT INTO employees(firstName, lastName, middleName, gender,ssn, dob, organization, department, iden, position, salary, health,dental, vision, addressOne, addressTwo ,apt, city, _state, zipcode, phone, email) VALUES ('$firstName', '$lastName', '$middleName', '$sex', '$ssn', '$dob', '$orangization', ' $dept', '$id', '$position', '$salary', '$health', '$dental', '$vision', '$addressOne', '$addressTwo', '$apt', '$city', '$state', '$zipcode', '$phone', '$email')";


   $run_query = mysqli_query($connect,$query);
   header("Refresh:2; admin.php");
  


  }
?>