<?php

include_once("config1.php");
session_start();
if (!isset($_SESSION['user_id'])) {
    header("location:loginn.php");
    # code...
}

$obj = new Config();

$select = $obj->select("Complaint");

if(isset($_GET['id']) && $_GET['id'] > 0)
{
	$con_check['Id'] = $_GET['id'];
	$delete = $obj->delete("Complaint",$con_check);
	if($delete)
	{
		header("location:AdminView.php");
	}
	else
	{
		return false;
	}
}

?>

<!DOCTYPE html>
<html lang="en-US" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec"  prefix="og: http://ogp.me/ns#" class="no-js">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Online Crime Reporting System</title>
<link rel="shortcut icon" href="https://demo.learncodeweb.com/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="col-sm-6">
			<h1>Complaint Database</h1>
		</div>
	</div>
	
	<div>
		<table class="table table-striped table-bordered">
			<thead>
				<tr class="bg-primary text-white">
					<th>Id</th>
					<th>Name</th>
					<th>Email</th>
					<th>Complaint Description</th>
					<th>Complaint Date</th>
					<th>Approval</th>
				</tr>
			</thead>

			<tbody>
				<?php foreach($select as $select_data){ ?>
					<tr>
						<td><?php echo $select_data['Id']; ?></td>
						<td><?php echo $select_data['Name']; ?></td>
						<td><?php echo $select_data['Email']; ?></td>
						<td><?php echo $select_data['Complaint_Description']; ?></td>
						<td><?php echo $select_data['Complaint_Date']; ?></td>
						<td><?php echo $select_data['Approval']; ?></td>
					</tr>
						<?php } ?>
			</tbody>
		</table>
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>
</html>