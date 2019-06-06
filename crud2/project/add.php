<?php
//start session
session_start();
 
//including the database connection file
include_once('Crud.php');
 
$crud = new Crud();
 
if(isset($_POST['add'])) {    
    $name = $crud->escape_string($_POST['name']);
    $status = $crud->escape_string($_POST['status']);
    $duration = $crud->escape_string($_POST['duration']);
 
    //insert data to database
    $sql = "INSERT INTO projects (name, status, duration) VALUES ('$name','$status','$duration')";
 
    if($crud->execute($sql)){
        $_SESSION['message'] = 'Project added successfully';
    }
    else{
        $_SESSION['message'] = 'Cannot add project';
    }
 
    header('location: projects');
}
else{
    $_SESSION['message'] = 'Fill up add form first';
    header('location: projects');
}
?>