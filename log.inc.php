<?php
    session_start();
  
    if (isset($_POST["submit"])) {
       $username = $_POST["username"];
      
        $password = $_POST["password"];
	
		
	$con = mysqli_connect("localhost", "root", "", "online_crime_reporting");
        mysqli_select_db($con,"online_crime_reporting");
        

       if( $query = "select * from user where username='$username' and password='$password' "){
       //$query = "select * from customer where username='archchu' and password='badulla12' and status='1'";
        
        $Q2 =mysqli_query($con,$query);
        
       // $result = mysqli_query($con, $Q2);
        $row = mysqli_fetch_array($Q2);
        //$type=$row['user_type'];
        
$check_user=mysqli_num_rows($Q2);
        if ($check_user==1) {
          
         $_SESSION["type"]=$row['userlevel'];
         $_SESSION["user_id"]=$row['id'];

       
          //var_dump("here"); exit();
            header("location:userpage.php");
         
           
      }else{
        echo '<script>alert("username or password is incorrect !!")</script>';
        echo '<script>window.location="loginn.php"</script>';

        
      }
		}
		
		
		
         if( $query = "select * from admin where username='$username' and password='$password' "){
        $Q2 =mysqli_query($con,$query);
        
       // $result = mysqli_query($con, $Q2);
        $row = mysqli_fetch_array($Q2);
        //$type=$row['user_type'];
        
     $check_user=mysqli_num_rows($Q2);
        if ($check_user==1) {
         $_SESSION["type"]=$row['userlevel'];
          $_SESSION["user_id"]=$row['id'];
           header("location:adminpage.php");
         
           
      }else{
        echo '<script>alert("username or password is incorrect !!")</script>';
        echo '<script>window.location="loginn.php"</script>';

        
      }
     
		}

              
        
	      if( $query = "select * from police_officers where username='$username' and password='$password' "){
        
        $Q2 =mysqli_query($con,$query);
        $row = mysqli_fetch_array($Q2);
      $check_user=mysqli_num_rows($Q2);
        if ($check_user==1) {
         $_SESSION["type"]=$row['userlevel'];
          $_SESSION["user_id"]=$row['id'];
          header("location:policepage.php");
          }else{
        echo '<script>alert("username or password is incorrect !!")</script>';
        echo '<script>window.location="loginn.php"</script>';

        
      }
     
		}
       
        
	
		

       
        	
	
		
		
    }
	
    ?>  

