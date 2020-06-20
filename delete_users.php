<?php
include_once("Crud.php");
 
$crud = new Crud();
$id = $crud->escape_string($_GET['id']);
$result = $crud->delete($id, 'user');
 
if ($result) {
    header("Location:users.php");
}
?>