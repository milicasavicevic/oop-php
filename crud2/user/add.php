<?php
//start session
session_start();
 
//including the database connection file
include_once('Crud.php');
 
$crud = new Crud();
 
if(isset($_POST['add'])) {    
    $name = $crud->escape_string($_POST['name']);
    $surname = $crud->escape_string($_POST['surname']);
    $position = $crud->escape_string($_POST['position']);
 
    //insert data to database
    $sql = "INSERT INTO users (name, surname, position) VALUES ('$name','$surname','$position')";
 
    if($crud->execute($sql)){
        $_SESSION['message'] = 'User added successfully';
    }
    else{
        $_SESSION['message'] = 'Cannot add user';
    }
 
    header('Location:users');
}
else{
    $_SESSION['message'] = 'Fill up add form first';
    header('location: users');
}
?>