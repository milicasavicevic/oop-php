<?php
//start session
session_start();
 
//including the database connection file
include_once('Crud.php');
 
$crud = new Crud();
 
if(isset($_POST['add'])) {    
    $name = $crud->escape_string($_POST['name']);
    
 
    //insert data to database
    $sql = "INSERT INTO tasks (name) VALUES ('$name')";
 
    if($crud->execute($sql)){
        $_SESSION['message'] = 'Task added successfully';
    }
    else{
        $_SESSION['message'] = 'Cannot add task';
    }
 
    header('location: tasks');
}
else{
    $_SESSION['message'] = 'Fill up add form first';
    header('location: tasks');
}
?>