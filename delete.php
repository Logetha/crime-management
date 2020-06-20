<?php
//including the database connection file
include_once("config.php");
 
$feedback_delete = new Config();
 
//getting id of the data from url
$id = $feedback_delete->escape_string($_GET['id']);
 
//deleting the row from table
//$result = $crud->execute("DELETE FROM users WHERE id=$id");
$result = $feedback_delete->delete($id, 'feedback');
 
if ($result) {
    //redirecting to the display page (index.php in our case)
    header("Location:admin-feedback.php");
}
?>