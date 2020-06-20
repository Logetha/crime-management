
<?php

include("config.php");
$registerr = new Config();


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $useremail = $_POST['useremail'];
        $usermobile = $_POST['usermobile'];
        $useraddress = $_POST['useraddress'];
       
        $name = $registerr->validation($name);
        $username = $registerr->validation($username);
        $password = $registerr->validation($password);
        $useremail = $registerr->validation($useremail);
        $usermobile = $registerr->validation($usermobile);
        $useraddress = $registerr->validation($useraddress);

        $db_field['name'] = $name;
        $db_field['username'] = $username;
        $db_field['password'] = $password;
        $db_field['useremail'] = $useremail;
        $db_field['usermobile'] = $usermobile;
        $db_field['useraddress'] = $useraddress;

        $msg_check = "";

        if(!empty($name) && !empty($username) && !empty($useremail) && !empty($usermobile) && !empty($useraddress) && !empty($password) )
        {

            $data = $registerr->insert("user",$db_field);

            if($data == 'TRUE')
            {
                            header("location:users.php");
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

        <title>Online Crime Reporting</title>



        <link rel="shortcut icon" href="https://demo.learncodeweb.com/favicon.ico">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

        <!--[if lt IE 9]>

        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

        <![endif]-->

        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

        <script>

            (adsbygoogle = window.adsbygoogle || []).push({

                google_ad_client: "ca-pub-6724419004010752",

                enable_page_level_ads: true

            });

        </script>

        <!-- Global site tag (gtag.js) - Google Analytics -->

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131906273-1"></script>

        <script>

            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());

            gtag('config', 'UA-131906273-1');

        </script>

    </head>



    <body>
        <script>
function lettersOnly(input) {
    var regex = /[^a-z]/gi;
    input.value = input.value.replace(regex, "");
}
</script> 

        <div class="container">

            <div class="card">

                <div class="card-header"><i class="fa fa-fw fa-plus-circle"></i> <strong>Register </strong> </div>

                <div class="card-body">



                    <div class="col-sm-6">

                        
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                            <div class="form-group">

                                <label> Name <span class="text-danger">*</span></label>

                                <input type="text" name="name" id="username" class="form-control" placeholder="Enter your name" required  onkeyup="lettersOnly(this)" >
                               
                            </div>

                                <div class="form-group">

                                <label>Email <span class="text-danger">*</span></label>

                                <input type="email" name="useremail" id="useremail" class="form-control" placeholder="Enter your email"  maxlength="50" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" >
                               </div>

                               <div class="form-group">

                                <label>Mobile <span class="text-danger">*</span></label>

                                <input type="text" name="usermobile" id="useremail" class="form-control" placeholder="Enter your mobile" >
                               </div>

                                <div class="form-group">

                                <label>Address <span class="text-danger">*</span></label>

                                <input type="text" name="useraddress" id="useremail" class="form-control" placeholder="Enter your address" >
                               </div>


                                 <div class="form-group">

                                <label>Username <span class="text-danger">*</span></label>

                                <input type="text" name="username" id="useremail" class="form-control" placeholder="Enter your username" >
                               </div>

                            <div class="form-group">

                                <label>Password <span class="text-danger">*</span></label>

                                <input type="Password" name="password" id="useremail" class="form-control" placeholder="Enter your password" >
                               </div>

                          

                            <div class="form-group">

                                <button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-plus-circle"></i> Register</button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>



        <div class="container my-4">

            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

            <!-- demo left sidebar -->

            <ins class="adsbygoogle"

                 style="display:block"

                 data-ad-client="ca-pub-6724419004010752"

                 data-ad-slot="7706376079"

                 data-ad-format="auto"

                 data-full-width-responsive="true"></ins>

            <script>

            (adsbygoogle = window.adsbygoogle || []).push({});

            </script>

        </div>



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/jquery.caret/0.1/jquery.caret.js"></script>
        <script src="https://www.solodev.com/_/assets/phone/jquery.mobilePhoneNumber.js"></script>
        <script>
            $(document).ready(function () {
                jQuery(function ($) {
                    var input = $('[type=tel]')
                    input.mobilePhoneNumber({allowPhoneWithoutPrefix: '+1'});
                    input.bind('country.mobilePhoneNumber', function (e, country) {
                        $('.country').text(country || '')
                    })
                });
            });
        </script>



    </body>

</html>