<?php
include_once("Crud.php");
 
$crud = new Crud();
$id = $crud->escape_string($_GET['id']);
$result = $crud->delete($id, 'police_officers');
 
if ($result) {
    header("Location:police_officers.php");
}
?>