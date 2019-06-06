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
    $sql = "DELETE FROM clients WHERE id = '$id'";
 
    if($crud->execute($sql)){
        $_SESSION['message'] = 'Client deleted successfully';
    }
    else{
        $_SESSION['message'] = 'Cannot delete client';
    }
 
    header('location: clients');
}
else{
    $_SESSION['message'] = 'Select client to delete first';
    header('location: clients');
}
?>