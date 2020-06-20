<?php
    session_start();
  
    if (isset($_POST["submit"])) {
       $username = $_POST["username"];
        $password = $_POST["password"];
  
    
    $con = mysqli_connect("localhost", "root", "", "crime");
        mysqli_select_db($con,"user");
        

        $query = "select * from user where username='$username' and password='$password'";
       //$query = "select * from user where username='archchu' and password='badulla12' and status='1'";
        
        $Q2 =mysqli_query($con,$query);
        
       // $result = mysqli_query($con, $Q2);
        $row = mysqli_fetch_array($Q2);
        $type=$row['userlevel'];
        
      // $count=mysqli_num_rows($result);
     // $isexist=mysqli_query($con,"select * from customer where username='$UN' and password='$Pwd' and status='1'");
      $check_user=mysqli_num_rows($Q2);
        if ($check_user==1) {
          //var_dump($row['cus_fname']); exit();
         $_SESSION["type"]=$row['userlevel'];
        // var_dump( $_SESSION["type"]);exit();
        $_SESSION['name']=$row['name'];
        $_SESSION['id']=$row['id'];
         if($type=="user"){
          //var_dump("here"); exit();
            header("location: user.php");
         }
		 elseif($type=="police"){
            header("location: police.php");

         }
		 else{
            header("location: admin.php");

         }
            
      }else{
        echo '<script>alert("username or password is incorrect !!")</script>';
        echo '<script>window.location="loginn.php"</script>';

        
      }
       
     
    }
  
    ?>  

