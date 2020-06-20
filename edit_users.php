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
$result = $crud->getData("SELECT * FROM user WHERE id=$id");
 
foreach ($result as $res) {
   $id = $res['id'];
    $name = $res['name'];
    $useremail = $res['useremail'];
    $usermobile = $res['usermobile'];
    $useraddress= $res['useraddress'];
    $username= $res['username'];
   
    
    
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
       	<form action="edit_user_connection.php" method="post"  class="validate" enctype="multipart/form-data" >
	   <table align = "center" cellpadding="5" width="100%">
	   <th style = "font-size:25px; color: #000000;">CHANGE USERS DETAILS</th>
	   
	   <tr>	  
		  <td><label for = "id" style = "font-size:25px; color:#000000;">User Id: </label></td>
		  <td><input type = "" placeholder = "Enter User Id" name = "id" value="<?php echo $id;?>" required readonly ><br></td>
		</tr> 

      	<tr>	  
		  <td><label for = "name" style = "font-size:25px; color:#000000;">User Name: </label></td>
		  <td><input type = "text" placeholder = "Enter User Name" name = "name" value="<?php echo $name;?>" required ><br></td>
		</tr> 

		<tr>	  
		  <td><label for = "useremail" style = "font-size:25px; color:#000000;">User Email: </label></td>
		  <td><input type = "text" placeholder = "Enter UserEmail" name = "useremail" value="<?php echo $useremail;?>" required ><br></td>
		</tr> 

		<tr>	  
		  <td><label for = "usermobile" style = "font-size:25px; color:#000000;">User Mobile No: </label></td>
		  <td><input type = "text" placeholder = "Enter User Mobile Number" name = "usermobile"  value="<?php echo $usermobile;?>" required ><br></td>
		</tr> 

		<tr>	  
		  <td><label for = "useraddress" style = "font-size:25px; color:#000000;">User Address: </label></td>
		  <td><input type = "text" placeholder = "Enter User Address" name = "useraddress" value="<?php echo $useraddress;?>"  required ><br></td>
		</tr> 

		<tr>	  
		  <td><label for = "username" style = "font-size:25px; color:#000000;">User Name: </label></td>
		  <td><input type = "text" placeholder = "Enter User Name" name = "username" value="<?php echo $username;?>" required ><br></td>
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