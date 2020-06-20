<?php
ob_start();
// including the database connection file
include_once("Crud.php");
include_once("Validation.php");
 
$crud = new Crud();
$validation = new Validation();


 
if(isset($_POST['update']))
{    
    
    $id = $crud->escape_string($_POST['id']);
        $police_name = $crud->escape_string($_POST['police_name']);
      $police_mobile = $crud->escape_string($_POST['police_mobile']);
    $police_address = $crud->escape_string($_POST['police_address']);
    $police_email = $crud->escape_string($_POST['police_email']);
    


    $msg = $validation->check_empty($_POST, array('id','police_name','police_mobile', 'police_address', 'police_email'));
    // $check_age = $validation->is_age_valid($_POST['age']);
    $check_email = $validation->is_email_valid($_POST['police_email']);
    
    // checking empty fields
    if($msg) {
        echo $msg;        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    // } elseif (!$check_age) {
    //     echo 'Please provide proper age.';
    } elseif (!$check_email) {
        echo 'Please provide proper email.';    
    } else {    
        //updating the table
        $result = $crud->execute("UPDATE police_officers SET id='$id',police_name='$police_name',police_mobile='$police_mobile',police_address='$police_address',police_email='$police_email' WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location:police_officers.php");
    }
}
?>
