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
    $sql = "DELETE FROM tasks WHERE id = '$id'";
 
    if($crud->execute($sql)){
        $_SESSION['message'] = 'Task deleted successfully';
    }
    else{
        $_SESSION['message'] = 'Cannot delete task';
    }
 
    header('location: tasks');
}
else{
    $_SESSION['message'] = 'Select task to delete first';
    header('location: tasks');
}
?>