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
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit-icons.min.js"></script>
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
        <body>
            <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
            <nav class="uk-navbar-container" uk-navbar style="position: relative; z-index: 980;">
        <div class="uk-navbar-left">

            <ul class="uk-navbar-nav data-uk" data-uk-scrollspy-nav="{closest:'li'}">
                <li class="uk-active"><a href="index.html">Home</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                 <li><a href="signIn.php">Order Now</a></li> 
            </ul>

        </div>
            </nav>
        </div>
        <div class="space">   </div>
            <div class="uk-text-center signin">    
                    Forgot Password 
            </div>
            <div class="uk-container">
                <div class="space"></div>
            <form class="uk-grid-small uk-text-center" action="changePassword.php" uk-grid  method="POST" >

                <div class="uk-width-1-1 uk-inline uk-text-center">
               
                <input class="uk-input" type="email" name="email" placeholder="Enter Your emailid" style="width: 400px;" required>  
            </div>
            <div class="uk-width-1-1 uk-inline uk-text-center">
               
                <input class="uk-input" type="date" name="dob" placeholder="Enter Your date of birth" style="width: 400px;" required>  
            </div>
            <div class="uk-width-1-1 uk-inline uk-text-center">
               
                <input class="uk-input" type="password" name="newpass" placeholder="Enter Your new Password" style="width: 400px;" required>
            </div>
             <div class="uk-width-1-1 uk-inline">
               
                <input class="uk-input" type="password" name="confnew" placeholder="Reenter Your New Password" style="width: 400px;" required>
            <br><br>
            <button class="uk-button uk-button-danger" name="pass" >Submit</button>
            </div>
            </form>
            <div class="space"></div>
                <div class="uk-text-center">
               <a href="registration.html"> Create Account </a><span class="uk-margin-left"><a >Forgot Password??</a></span>
            </div>
                    </div> 
        </body>
    </head>
    </html>
