<?php 

session_start();
if (!isset($_SESSION['user_id'])) {
    header("location:loginn.php");
    # code...
}
?><!DOCTYPE html>
<html>
    <head>
      <?php include ("link.php"); ?>
      <?php include ("nav2.php"); ?>

   <title></title>
   
    </head>
    <body></body>
    </html>