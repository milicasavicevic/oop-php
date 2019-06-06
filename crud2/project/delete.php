<?php
//start session
session_start();
 
//including the database connection file
include_once('Crud.php');
 
if(isset($_GET['id'])){
 
    //getting the id
    $id = $_GET['id'];
 
    $crud = new Crud();
 
    //delete data
    $sql = "DELETE FROM projects WHERE id = '$id'";
 
    if($crud->execute($sql)){
        $_SESSION['message'] = 'Project deleted successfully';
    }
    else{
        $_SESSION['message'] = 'Cannot delete project';
    }
 
    header('location: projects');
}
else{
    $_SESSION['message'] = 'Select project to delete first';
    header('location: projects');
}
?>