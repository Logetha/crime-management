<?php
ob_start();
// including the database connection file
include_once("Crud.php");
include_once("Validation.php");
session_start();
if (!isset($_SESSION['user_id'])) {
    header("location:loginn.php");
    # code...
}
 
$crud = new Crud();
$validation = new Validation();


 
if(isset($_POST['update']))
{    
    
    $id = $crud->escape_string($_POST['id']);
    $name = $crud->escape_string($_POST['name']);
    $useremail = $crud->escape_string($_POST['useremail']);
    $useraddress = $crud->escape_string($_POST['useraddress']);
    $usermobile = $crud->escape_string($_POST['usermobile']);
    $username = $crud->escape_string($_POST['username']);

    
    


    $msg = $validation->check_empty($_POST, array('id','name','useremail','usermobile', 'useraddress', 'username'));
    // $check_age = $validation->is_age_valid($_POST['age']);
    $check_email = $validation->is_email_valid($_POST['useremail']);
    
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
        $result = $crud->execute("UPDATE user SET id='$id',name='$name',useremail='$useremail',usermobile='$usermobile',useraddress='$useraddress',username='$username' WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location:users.php");
    }
}
?>
