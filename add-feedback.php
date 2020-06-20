
<?php
include("config.php");
session_start();
if (!isset($_SESSION['user_id'])) {
    header("location:loginn.php");
    # code...
}


$feedbacks = new Config();


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $feedback = $_POST['feedback'];
       

        $name = $feedbacks->validation($name);
        $email = $feedbacks->validation($email);
        $feedback = $feedbacks->validation($feedback);

        $db_field['name'] = $name;
        $db_field['email'] = $email;
        $db_field['feedback'] = $feedback;
        

        $msg_check = "";

        if(!empty($name) && !empty($email) && !empty($feedback) )
        {

            $data = $feedbacks->insert("feedback",$db_field);

            if($data == 'TRUE')
            {
                            header("location:browse-feedback.php");
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

<html lang="en-US" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec"  prefix="og: http://ogp.me/ns#" class="no-js">

    <head>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="https://demo.learncodeweb.com/favicon.ico">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
         <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

        <script>

            (adsbygoogle = window.adsbygoogle || []).push({

                google_ad_client: "ca-pub-6724419004010752",

                enable_page_level_ads: true

            });

        </script>
         <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131906273-1"></script>

        <script>

            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());

            gtag('config', 'UA-131906273-1');

        </script>



        <script>
function lettersOnly(input) {
    var regex = /[^a-z]/gi;
    input.value = input.value.replace(regex, "");
}
</script>

    </head>



    <body>

        <div class="container">

            <div class="card">

                <div class="card-header"><i class="fa fa-fw fa-plus-circle"></i> <strong>Add Feedback</strong> </div>

                <div class="card-body">



                    <div class="col-sm-6">


                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                            <div class="form-group">

                                <label> Name <span class="text-danger">*</span></label>

                                <input type="text" name="name" id="username" class="form-control" placeholder="Enter your name" required onkeyup="lettersOnly(this)"  >
                               
                            </div>

                            <div class="form-group">

                                <label>Email <span class="text-danger">*</span></label>

                                <input type="email" name="email" id="useremail" class="form-control" required  placeholder="Enter your email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                               </div>

                          
                            <div class="form-group">

                                <label>Feedback Description <span class="text-danger">*</span></label>
                            <br>
                                <textarea name="feedback"  class="form-control"  placeholder="Enter feedback here..."></textarea> 
                            </div>

                            <div class="form-group">

                                <button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-plus-circle"></i> Add Feedback</button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>


     </body>

</html>