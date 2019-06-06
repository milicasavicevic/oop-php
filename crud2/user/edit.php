<?php

session_start();
 

include_once('crud.php');
 
$id = $_GET['id'];
 
$crud = new Crud();
 
if(isset($_POST['edit'])) {    
    $name = $crud->escape_string($_POST['name']);
    $surname = $crud->escape_string($_POST['surname']);
    $position = $crud->escape_string($_POST['position']);
 
    
    $sql = "UPDATE users SET name = '$name', surname = '$surname', position = '$position' WHERE id = '$id'";
 
    if($crud->execute($sql)){
        $_SESSION['message'] = 'User updated successfully';
    }
    else{
        $_SESSION['message'] = 'Cannot update user';
    }
 
    header('location: users');
}
else{
    $_SESSION['message'] = 'Select user to edit first';
    header('location: users');
}
?>