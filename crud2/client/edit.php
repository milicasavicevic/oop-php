<?php

session_start();
 

include_once('crud.php');
 
$id = $_GET['id'];
 
$crud = new Crud();
 
if(isset($_POST['edit'])) {    
    $name = $crud->escape_string($_POST['name']);
    $surname = $crud->escape_string($_POST['surname']);
    $position = $crud->escape_string($_POST['phone']);
 
    
    $sql = "UPDATE clients SET name = '$name', surname = '$surname', phone = '$phone' WHERE id = '$id'";
 
    if($crud->execute($sql)){
        $_SESSION['message'] = 'Client updated successfully';
    }
    else{
        $_SESSION['message'] = 'Cannot update client';
    }
 
    header('location: clients');
}
else{
    $_SESSION['message'] = 'Select client to edit first';
    header('location: clients');
}
?>