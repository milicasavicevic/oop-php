<?php
//start session
session_start();
 
//including the database connection file
include_once('Crud.php');
 
$crud = new Crud();
 
if(isset($_POST['add'])) {    
    $name = $crud->escape_string($_POST['name']);
    $surname = $crud->escape_string($_POST['surname']);
    $phone = $crud->escape_string($_POST['phone']);
 
    //insert data to database
    $sql = "INSERT INTO clients (name, surname, phone) VALUES ('$name','$surname','$phone')";
 
    if($crud->execute($sql)){
        $_SESSION['message'] = 'Client added successfully';
    }
    else{
        $_SESSION['message'] = 'Cannot add client';
    }
 
    header('location: clients');
}
else{
    $_SESSION['message'] = 'Fill up add form first';
    header('location: clients');
}
?>