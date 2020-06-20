<?php

include("config.php");

session_start();
if (!isset($_SESSION['user_id'])) {
    header("location:loginn.php");
    # code...
}
$ins_obj = new Config();


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	if(isset($_POST['submit']))
	{
		$n_name = $_POST['name'];
		$n_email = $_POST['email'];
		$n_desc = $_POST['desc'];
		$date = $_POST['date'];


		$name = $ins_obj->validation($n_name);
		$email = $ins_obj->validation($n_email);
		$desc = $ins_obj->validation($n_desc);

		$db_field['Name'] = $name;
		$db_field['Email'] = $email;
		$db_field['Complaint_Description'] = $desc;
		$db_field['Complaint_Date'] = $date;

		$msg_check = "";

		if(!empty($name) && !empty($email) && !empty($desc) && !empty($date))
		{

			$data = $ins_obj->insert("Complaint",$db_field);

			if($data == 'TRUE')
			{
                            header("location:sample.php");
			}
			else
			{
				echo "Not Inserted";
			}
			
		}
		else
		{
			$msg_check = "All Field Are Required";
		}

	}
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Online Crime Reporting System</title>
<link rel="shortcut icon" href="https://demo.learncodeweb.com/favicon.ico">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

</head>
<body>

	<script>
function lettersOnly(input) {
    var regex = /[^a-z]/gi;
    input.value = input.value.replace(regex, "");
}
</script> 
	
	<div class="container">
        <div class="col-sm-6">
			<h1 class="card-title">Complaint</h1>
			<form method="post">
			<div class="form-group">
				<label>Full Name</label>
				<input type="text" name="name" placeholder="Enter Name" value=" <?php echo @$_POST['name']; ?>" class="form-control"  onkeyup="lettersOnly(this)">
			</div>

			<div class="form-group">
				<label>Email</label>
				<input type="Email" name="email" placeholder="Enter Email" value="<?php echo @$_POST['email']; ?>" class="form-control">
			</div>

			<div class="form-group">
				<label>Complaint Description</label>
                <input type="text" name="desc" placeholder="Explain What is Happen" value="<?php echo @$_POST['desc']; ?>" class="form-control" onkeyup="lettersOnly(this)">
			</div>

			<div class="form-group">
				<label>Complaint Date</label>
				<input type="date" name="date" value="<?php echo @$_POST['date']; ?>" class="w-100 form-control"><br>
				<span style="color: red;"><?php echo @$file_error; ?></span>
			</div>

			<div class="form-group">
                <input type="submit" name="submit" value="Submit" class="btn btn-primary"> <br>
            </div>

		</form>
	</div>
</div>
</body>
</html>