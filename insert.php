<?php
include 'database_connection.php';


//Insert class is inherited from Database class
Class Insert extends Database{
	//create method for insert data in database
	public function saveRecords($tbName,$n,$m,$a,$e,$y,$x,$p)
	{
	$conn=$this->connect();
	mysqli_query($conn,"insert into $tbName values('".$n."','".$m."','".$a."','".$e."','".$y."','".$x."','".$p."')");
	}

	}

	//call methods and create an object
    $insert = new Insert();
    
    extract($_POST);
    
    //Saved Records Inside Database
    if(isset($save))
    {

    //here police_officers is table name, $police_name,$police_mobile,$police_address and $police_email entered by html form  
    $insert->saveRecords("police_officers",$police_name,$police_mobile,$police_address,$police_email,$username,"p1234","police");
    echo "Records Saved ";
}
?>