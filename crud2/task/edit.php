<?php

session_start();
 

include_once('crud.php');
 
$id = $_GET['id'];
 
$crud = new Crud();
 
if(isset($_POST['edit'])) {    
    $name = $crud->escape_string($_POST['name']);
 
    
    $sql = "UPDATE tasks SET name = '$name' WHERE id = '$id'";
 
    if($crud->execute($sql)){
        $_SESSION['message'] = 'Task updated successfully';
    }
    else{
        $_SESSION['message'] = 'Cannot update task';
    }
 
    header('location: tasks');
}
else{
    $_SESSION['message'] = 'Select user to edit first';
    header('location: tasks');
}
?>