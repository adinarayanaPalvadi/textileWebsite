<?php include ('dbConnect.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Madhav Textiles</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/css/uikit.min.css" />
        <link rel="stylesheet" href="signIn.css" >
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Ubuntu|Padauk" rel="stylesheet">
<!-- UIkit JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit-icons.min.js"></script>
        <script>
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }
            </script>
        <style type="text/css">
            .signin
                {
                    font-size: 35px;
                    font-weight: 600;
                    font-family: sans-serif ;
                }
                .space
                {
                    height: 40px;

                }


        </style>
        </head>
        <body>
            <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar" >
    <nav class="uk-navbar-container " uk-navbar style="position: relative; z-index: 980;">
        <div class="uk-navbar-left">
                
            <ul class="uk-navbar-nav data-uk " data-uk-scrollspy-nav="{closest:'li'}">
                <li class="uk-active"><a href="index.php" style="font-weight: 500; color: #5c3fff;font-size: 18px;font-family: 'Josefin Sans', sans-serif;"><span uk-icon="icon: home; ratio: 0" class="uk-margin-small-right uk-margin-small-bottom" style="color: #ff5f49"></span>Home</a></li>
                <li><a href="gallery.html" style="font-weight: 500; color: #5c3fff;font-size: 18px;font-family: 'Josefin Sans', sans-serif;"><span uk-icon="icon: image; ratio: 0" class="uk-margin-small-right uk-margin-small-bottom" style="color: #ff5f49"></span>Gallery</a></li>
                 <li><a href="signIn.php" style="font-weight: 500; color: #5c3fff;font-size: 18px;font-family: 'Josefin Sans', sans-serif;"><span uk-icon="icon: cart; ratio: 0" class="uk-margin-small-right uk-margin-small-bottom" style="color: #ff5f49"></span>Order Now</a></li> 
            </ul>

        

        
        </div>
        
    </nav>
</div>
        <div class="space">   </div>
            <div class="uk-text-center signin">    
                    Sign in To Order the Items
            </div>
            <div class="uk-container">
                <div class="space"></div>
            <form class="uk-grid-small uk-text-center" action="signIn.php" uk-grid  method="POST" >
            <div class="uk-width-1-1 uk-inline uk-text-center">
               
                <input class="uk-input" type="text" name="email" placeholder="Enter Your email ID" style="width: 400px;" required>
            </div>
             <div class="uk-width-1-1 uk-inline">
               
                <input class="uk-input" type="password" name="password" placeholder="Enter Your Password" style="width: 400px;" required>
            <br><br>
            <button class="uk-button uk-button-danger" name="submit"  >Submit</button>
            </div>
            </form>
            <div class="space"></div>
                <div class="uk-text-center">
               <a href="registration.php"> Create Account </a><span class="uk-margin-left"><a href="changePassword.php" >Forgot Password??</a></span>
            </div>
                    </div> 
        </body>
    <script type="text/javascript">
        
    </script>
    </html>
