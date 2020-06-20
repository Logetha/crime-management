</<?php 
include_once("Crud.php");
session_start();
if (!isset($_SESSION['user_id'])) {
    header("location:loginn.php");
    # code...
}
$crud = new Crud();
 
//getting id from url
$id = $crud->escape_string($_GET['id']);


 
//selecting data associated with this particular id
$result = $crud->getData("SELECT * FROM police_officers WHERE id=$id");
 
foreach ($result as $res) {
    $id = $res['id'];
    $police_name = $res['police_name'];
    $police_mobile = $res['police_mobile'];
    $police_address = $res['police_address'];
    $police_email= $res['police_email'];
    
    
}
 ?>


<!DOCTYPE html>
<html lang = "en">

<head>
	<link rel="stylesheet" href="style.css">




   <title></title>
   <meta name="viewport" content="width=device-width, initial-scale=1">     


</head>


<body>
         
		 
		   
		 
	<div class = "col-12">
		<div class = "col-2">
		</div>
		 
        
       <div class = "col-8">
       	<form action="edit_connection.php" method="post"  class="validate" enctype="multipart/form-data" >
	   <table align = "center" cellpadding="5" width="100%">
	   <th style = "font-size:25px; color: #000000;">CHANGE POLICE OFFICIER DETAILS</th>
	   
	   <tr>	  
		  <td><label for = "id" style = "font-size:25px; color:#000000;">Police Id: </label></td>
		  <td><input type = "text" placeholder = "Enter Police Id" name = "id" value="<?php echo $id;?>" required readonly ><br></td>
		</tr> 

      	<tr>	  
		  <td><label for = "police_name" style = "font-size:25px; color:#000000;">Police Name: </label></td>
		  <td><input type = "text" placeholder = "Enter Police Name" name = "police_name" value="<?php echo $police_name;?>" required ><br></td>
		</tr> 

		<tr>	  
		  <td><label for = "police_mobile" style = "font-size:25px; color:#000000;">Police Mobile No: </label></td>
		  <td><input type = "text" placeholder = "Enter Police Mobile Number" name = "police_mobile"  value="<?php echo $police_mobile;?>" required ><br></td>
		</tr> 

		<tr>	  
		  <td><label for = "police_address" style = "font-size:25px; color:#000000;">Police Address: </label></td>
		  <td><input type = "text" placeholder = "Enter Police Address" name = "police_address" value="<?php echo $police_address;?>"  required ><br></td>
		</tr> 

		<tr>	  
		  <td><label for = "police_email" style = "font-size:25px; color:#000000;">Police Email: </label></td>
		  <td><input type = "text" placeholder = "Enter Police Email" name = "police_email" value="<?php echo $police_email;?>" required ><br></td>
		</tr> 

		<div class = "col-2">
			<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
			<td>
			<input type="submit" name="update" class="btn btn-primary" value="update" /> 
		</td>
	</div>



		</table>
		</div>

		<div class = "col-2">
		</div>

    		
	  
	   </form>
	   
	   
 
         

</body>

</html>