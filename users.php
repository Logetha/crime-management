<?php 
include 'DbConfig.php';
include 'Crud.php';

session_start();
if (!isset($_SESSION['user_id'])) {
    header("location:loginn.php");
    # code...
}
$news = new Crud();
$query = "SELECT * FROM user ORDER BY 


id DESC";
$result = $news->getData($query);
?>


<!DOCTYPE html>
<html>
    <head>
      <?php include ("link.php"); ?>
      


   <title></title>
   <meta name="viewport" content="width=device-width, initial-scale=1">     
   <link rel="stylesheet" href="style.css"> 

    </head>
  
<body >
<br>
    <div >
      <h3 class="box-title" style = "font-size:25px; color: #000000;">View Users Details</h3>
    
    </div> 

    
               
    <div>
      <table class="table table-bordered" align = "center" cellpadding="5" width="100%">
        <tr >
          <th>User Id</th>
          <th>User Name</th>
          <th>User Email</th>
          <th>User Mobile</th>
          <th>User Address</th>
          <th>Action</th></tr>

           <?php 
              foreach ($result as $key => $res) {
           
                echo "<tr>";
                echo "<td>".$res['id']."</td>";
                echo "<td>".$res['name']."</td>";
                echo "<td>".$res['useremail']."</td>";
                echo "<td>".$res['usermobile']."</td>";
                echo "<td>".$res['useraddress']."</td>";



 

                echo "<td> <a class='btn btn-sm btn-primary' href=\"edit_users.php?id=$res[id]\">
                              <i class='fa fa-fw fa-edit'></i>Edit</a>                       
                              
                              <a class='btn btn-sm btn-danger' href=\"delete_users.php?id=$res[id]\" onClick='return doconfirm()''>
                              <i class='fa fa-fw fa-trash'></i>Delete</a> </td>";
                            }
              ?>
     </table>

               </div>
</body>
</html>
