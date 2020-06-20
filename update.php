<?php

include_once("config1.php");
session_start();
if (!isset($_SESSION['user_id'])) {
    header("location:loginn.php");
    # code...
}
$obj = new Config();

global $select_id;

if(isset($_GET['id']) && $_GET['id'] > 0)
{
	$select_id = $_GET['id'];
	$select_set['Id'] = $select_id;

	$select = $obj->select_assoc("Complaint",$select_set);
}
else
{
	header("location:index.php");
}


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	if(isset($_POST['update']))
	{
		$n_name = $_POST['name'];
		$n_email = $_POST['email'];
		$n_desc = $_POST['desc'];
		$n_date = $_POST['date'];
		$n_approval = $_POST['approval'];

		$name = $obj->validation($n_name);
		$email = $obj->validation($n_email);
		$desc = $obj->validation($n_desc);
		$date = $obj->validation($n_date);
		$approval = $obj->validation($n_approval);

		$fset['Name'] = $name;
		$fset['Email'] = $email;
		$fset['Complaint_Description'] = $desc;
		$fset['Complaint_Date'] = $date;
		$fset['Approval'] = $approval;

		if(!empty($name) && !empty($email) && !empty($desc) && !empty($date) && !empty($approval))
		{
			$wset['Id'] = $select_id;
			$update = $obj->update("Complaint",$fset,$wset);
			if($update)
			{
				header("location:AdminView.php");
			}
			else
			{
				$msg_check = "Not Updated";
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
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Update DataBase</title>
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
				<h1>Update Complaint</h1>
				<form method="post">
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" placeholder="Enter Name"value="<?php echo $select['Name']; ?>" class="form-control "readonly>
					</div>

					<div class="form-group">
						<label>Email</label>
						<input type="Email" name="email" placeholder="Enter Email" value="<?php echo $select['Email']; ?>" class="form-control"readonly>
					</div>

					<div class="form-group">
						<label>Complaint Description</label>
						<input type="text" name="desc" placeholder="What's Happen" value="<?php echo $select['Complaint_Description']; ?>" class="form-control"readonly>
					</div>

					<div class="form-group">
						<label>Complaint Date</label>
						<input type="date" name="date" value="<?php echo $select['Complaint_Date']; ?>" class="w-100 form-control"readonly><br>
						<span style="color: red;"><?php echo @$file_error; ?></span>
					</div>

					<div class="form-group">
						<label>Approval</label>
						<input type="text" name="approval" placeholder="What's Happen" value="<?php echo $select['Approval']; ?>" class="form-control" onkeyup="lettersOnly(this)">
					</div>

					<div class="form-group">
						<input type="submit" name="update" value="Update" class="btn btn-primary"> <br>
					</div>

				</form>
				
			</div>
		</div>

</body>
</html>