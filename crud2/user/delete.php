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
    $sql = "DELETE FROM users WHERE id = '$id'";
 
    if($crud->execute($sql)){
        $_SESSION['message'] = 'User deleted successfully';
    }
    else{
        $_SESSION['message'] = 'Cannot delete user';
    }
 
    header('location: users');
}
else{
    $_SESSION['message'] = 'Select user to delete first';
    header('location: users');
}
?>