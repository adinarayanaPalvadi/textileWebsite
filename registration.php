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
            .space
                {
                    height: 40px;

                }
               .signin
                {
                    font-size: 35px;
                    font-weight: 600;
                    font-family: sans-serif ;
                    color: #ff4cf6;
                }
                body
                {
                   /* background-color: #b770ff;*/
                }
                .box
                {
                    border-radius: 5px;
                }
                
        </style>
        <body>
            <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
    <nav class="uk-navbar-container" uk-navbar style="position: relative; z-index: 980;">
        <div class="uk-navbar-left">

            <ul class="uk-navbar-nav data-uk" data-uk-scrollspy-nav="{closest:'li'}">
                <li class="uk-active"><a href="index.php" style="font-weight: 500; color: #5c3fff;font-size: 18px;font-family: 'Josefin Sans', sans-serif;"><span uk-icon="icon: home; ratio: 0" class="uk-margin-small-right uk-margin-small-bottom" style="color: #ff5f49"></span>Home</a></li>
                <li><a href="gallery.html" style="font-weight: 500; color: #5c3fff;font-size: 18px;font-family: 'Josefin Sans', sans-serif;"><span uk-icon="icon: image; ratio: 0" class="uk-margin-small-right uk-margin-small-bottom" style="color: #ff5f49"></span>Gallery</a></li>
                 <li><a href="signIn.php" style="font-weight: 500; color: #5c3fff;font-size: 18px;font-family: 'Josefin Sans', sans-serif;"><span uk-icon="icon: cart; ratio: 0" class="uk-margin-small-right uk-margin-small-bottom" style="color: #ff5f49"></span>Order Now</a></li> 
            </ul>

        </div>
        <div class="uk-navbar-right">

        <ul class="uk-navbar-nav">
            <li class="uk-margin-right"><a href="signIn.php" style="font-weight: 600;font-size: 20px;color: #2762f7" ><span uk-icon="icon: sign-in; ratio: 1.3" class="uk-margin-small-right" style="color: #ff5f49"></span>Sign in</a></li>
          </ul>
        </div>
    </nav>
</div>
        <div class="space">   </div>
        <div class="uk-text-center signin">    
                    Register With Us
        </div>
        <div class="space"></div>
        <div class="uk-container">
            <form class="uk-grid-small uk-text-center" uk-grid action="registration.php" method="POST" >
            <div class="uk-width-1-1 uk-inline uk-text-center">
               
                    <input class="uk-input box" type="text" name="fullname" placeholder="Enter Your Full name" style="width: 400px;" required>            
               
                <input class="uk-input box" type="email" name="email" placeholder="Enter Your emailId" style="width: 400px;" required>
            
            </div>
            <div class="uk-width-1-1 uk-inline">
               
                <input class="uk-input box" type="text" name="shopname" placeholder="Enter Your shop name" style="width: 400px;" required>
            
               
                <input class="uk-input box" type="list" name="location" placeholder="Enter your location" list="loc" style="width: 400px;" >
                <datalist id="loc" name="location">
                    <option value="Narasaraopet">Narasaraopet</option>
                    <option value="Guntur">Guntur</option>
                    <option value="Piduguralla">Piduguralla</option>
                    <option value="Vinukoda">Vinukoda</option>
                    <option value="Chilakaluripet">Chilakaluripet</option>
                    <option value="Sattenapalli">Sattenapalli</option>
                    <option value="Macherla">Macherla</option>
                    <option value="Gurajala">Gurajala</option>
                    <option value="Vijayawada">Vijayawada</option>
                    <option value="Chirala">Chirala</option>
                    
                </datalist>
            </div>
            <div class="uk-width-1-1 uk-inline">
               
                <input class="uk-input box" type="text" name="mobile" placeholder="Enter Your Mobile number" style="width: 400px;" required>
            
               
                <input class="uk-input box" type="date" name="dob" placeholder="Enter Your date of birth" style="width: 400px;" required>
            </div>
            
            <div class="uk-width-1-1 uk-inline">
               
                <input class="uk-input box" type="password" name="password" placeholder="Enter Your Password" style="width: 400px;" required>
            
            
               
                <input class="uk-input box" type="password" name="confpass" placeholder="Renter Your Password" style="width: 400px;" required>
            <br><br>
            <button class="uk-button uk-button-primary" name="register" >Register Us</button>
            </div>
            </form>
            <div class="space"></div><div class="space"></div><div class="space"></div>
        </div>  
    </body>
</head>