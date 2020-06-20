
<!DOCTYPE html>
<html lang = "en">

<head>
	<link rel="stylesheet" href="style.css">




   <title></title>
   <meta name="viewport" content="width=device-width, initial-scale=1">     


</head>


<body>
         
		<script>
function lettersOnly(input) {
    var regex = /[^a-z]/gi;
    input.value = input.value.replace(regex, "");
}
</script> 

	<div class = "col-12">
		<div class = "col-2">
		</div>
		 
        
       <div class = "col-8">
       	<form method="POST" action="insert.php" >
	   <table align = "center" cellpadding="5" width="100%">
	   <th style = "font-size:25px; color: #000000;">ADD POLICE OFFICIER DETAILS</th>
	   
      	<tr>	  
		  <td><label for = "police_name" style = "font-size:25px; color:#000000;">Police Name: </label></td>
		  <td><input type = "text" placeholder = "Enter Police Name" name = "police_name" required  onkeyup="lettersOnly(this)"  ><br></td>
		</tr> 

		<tr>	  
		  <td><label for = "police_mobile" style = "font-size:25px; color:#000000;">Police Mobile No: </label></td>
		  <td><input type = "text" placeholder = "Enter Police Mobile Number" name = "police_mobile"  required  ><br></td>
		</tr> 

		<tr>	  
		  <td><label for = "police_address" style = "font-size:25px; color:#000000;">Police Address: </label></td>
		  <td><input type = "text" placeholder = "Enter Police Address" name = "police_address" required ><br></td>
		</tr> 

		<tr>	  
		  <td><label for = "police_email" style = "font-size:25px; color:#000000;">Police Email: </label></td>
		  <td><input type = "text" placeholder = "Enter Police Email" name = "police_email"maxlength="50" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"  required ><br></td>
		</tr> 

		<tr>	  
		  <td><label for = "username" style = "font-size:25px; color:#000000;">User Name: </label></td>
		  <td><input type = "text" placeholder = "Enter User Name" name = "username" required ><br></td>
		</tr> 


		</table>
		</div>

		<div class = "col-2">
		</div>
	</div>
    		
    		<div class = "col-12">
    			<div class = "col-8">
    			</div>
		  <div class = "col-2"><input type="submit" name="save" class="btn btn-info" value="save" />  <span class="text-success">  
                     <?php  
                     if(isset($success_message))  
                     {  
                          echo $success_message;  
                     }  
                     ?>  
                     </span>  
		  
		  </div>
		</div>
	   
	   </form>
	   
	   
 
         

</body>

</html>