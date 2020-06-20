<?php 
include 'DbConfig.php';
include 'Crud.php';
session_start();
if (!isset($_SESSION['user_id'])) {
    header("location:loginn.php");
    # code...
}
$news = new Crud();
$query = "SELECT * FROM police_officers ORDER BY 


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
      <h3 class="box-title" style = "font-size:25px; color: #000000;">View Police officers Details</h3>
    
    </div> 

    <div class="col-md-12 text-right">
                <a class="btn btn-primary" style="background-color: #0345af;padding-right: 80px" href="insert_form.php">
                    <i class=""></i>
                    Create new                </a>
            </div></br></br>
               
    <div>
      <table class="table table-bordered" align = "center" cellpadding="5" width="100%">
        <tr >
          <th>Police Id</th>
          <th>Police Name</th>
          <th>Police Mobile</th>
          <th>Police Address</th>
          <th>Police Email</th>
          <th>Action</th></tr>

           <?php 
              foreach ($result as $key => $res) {
           
                echo "<tr>";
                echo "<td>".$res['id']."</td>";
                echo "<td>".$res['police_name']."</td>";
                echo "<td>".$res['police_mobile']."</td>";
                echo "<td>".$res['police_address']."</td>";
                echo "<td>".$res['police_email']."</td>";

 

                echo "<td> <a class='btn btn-sm btn-primary' href=\"edit_police_officers.php?id=$res[id]\">
                              <i class='fa fa-fw fa-edit'></i>Edit</a>                       
                              
                              <a class='btn btn-sm btn-danger' href=\"delete_police_officer.php?id=$res[id]\" onClick='return doconfirm()''>
                              <i class='fa fa-fw fa-trash'></i>Delete</a> </td>";
                            }
              ?>
     </table>

               </div>
</body>
</html>
