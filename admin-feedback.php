<?php

include_once("config.php");

session_start();
if (!isset($_SESSION['user_id'])) {
    header("location:loginn.php");
    # code...
}
$obj = new Config();
$obj2 = new Config();
$select1 = $obj->select("feedback");
$select = $obj2->select("phone");

?>
 
<!doctype html>
<html lang="en-US" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec"  prefix="og: http://ogp.me/ns#" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="shortcut icon" href="https://demo.learncodeweb.com/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
</head>

<body>


<div class ="row" >
                    <div class ="col-1" ></div>
                    <div class ="col-5" >
                        <h2 align="center">About us</h2>
                        <p>Welcome to the Tulsa Police Department Citizens' Online Police
Reporting System. This system allows you to submit a police report
and print a copy for your records<strong>.&nbsp; This system is not
a substitute for calling 911.&nbsp; Your report may not be reviewed
for up to 48 hours.</strong>&nbsp;</p>

<p><strong>This system is NOT for:</strong></p>

<ul>
<li>Emergencies or in-progress crimes</li>

<li>Criminal activity requiring immediate action</li>

<li>Anonymous reports of criminal activity</li>

<li>Collisions occurring on Interstate highways e.g., I-244, I-44,
etc.</li>

<li>Crimes occurring outside the corporate City Limits of
Tulsa&nbsp;</li>
</ul>

Please ensure your pop-up blocking software is turned off before
filing your report.
<br />
<br />
<p>Upon completion of this report process you will:</p>

<ul>
<li>See the words: "Your online police report has been submitted"
showing that your police report is complete.</li>

<li>Be able to print a copy of the police report for your
records.</li>

<li><strong>You must provide a valid email address for your report
to be accepted. When your report is processed, a number will be
assigned and e-mailed to you. When you receive a number the report
has been accepted and is on file.</strong></li>
</ul>

Please Note: 

<ul>
<li>All cases filed using the Citizens Online Police Reporting
System will be reviewed.</li>

<li>If further investigation of your case is needed, you may be
contacted.</li>

<li>Filing a false police report is a crime.</li>
</ul>                   
                    </div>
                    
                    
                    
                    <div class ="col-5" >
                           <div class="card-header"><i class=""></i> <strong>Contact TPD Phone Numbers</strong> <a href="add-phone.php" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-plus-circle"></i> Add Contact</a></div>
               
                <br>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr class="bg-primary text-white">
                        <th>Crime type</th>
                        <th>Phone number</th>
                        
                    
                    </tr>
                </thead>
                <tbody>
                        <?php foreach($select as $select_data){ ?>
                        <tr>
                            <td><?php echo $select_data['crime']; ?></td>
                            <td><?php echo $select_data['phone']; ?></td>
                            
                        </tr>
                        <?php } ?>
                    </tbody>
            </table>
        </div>
        
            <div class ="col-1" >   </div>  
                
    </div>
    <div class="container">
        
        <hr>
     
    </br>
        <div>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr class="bg-primary text-white">
                        <th>Name</th>
                        <th>Email</th>
                        <th>Feedback</th>
                        
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                        <?php foreach($select1 as $result){ ?>
                        <tr>
                            <td><?php echo $result['name'] ?></td>
                            <td><?php echo $result['email'] ?></td>
                            <td><?php echo $result['feedback']; ?></td>
                            <td align="center">
                                                   
                               <a href="delete.php?id=<?php echo $result['id']; ?>" class="text-danger" onClick="return confirm('Are you sure to delete this user?');"><i class="fa fa-fw fa-trash"></i> Delete</a>
                        </td>
                        </tr>
                        <?php } ?>
                    </tbody>
            </table>
        </div>
        
    </div>
   
</body>
</html>
