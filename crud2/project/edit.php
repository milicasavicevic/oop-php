<?php

session_start();
 

include_once('crud.php');
 
$id = $_GET['id'];
 
$crud = new Crud();
 
if(isset($_POST['edit'])) {    
    $name = $crud->escape_string($_POST['name']);
    $status = $crud->escape_string($_POST['status']);
    $duration = $crud->escape_string($_POST['duration']);
 
    
    $sql = "UPDATE projects SET name = '$name', status = '$status', duration = '$duration' WHERE id = '$id'";
 
    if($crud->execute($sql)){
        $_SESSION['message'] = 'Project updated successfully';
    }
    else{
        $_SESSION['message'] = 'Cannot update project';
    }
 
    header('location: projects');
}
else{
    $_SESSION['message'] = 'Select project to edit first';
    header('location: projects');
}
?>