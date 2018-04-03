<?php include ('dbConnect.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Madhav Textiles</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/css/uikit.min.css" />
        <link rel="stylesheet" href="index.css" >
        <link href="https://fonts.googleapis.com/css?family=Lobster|Russo+One|Hammersmith|Bree+Serif|Kanit|Timmana|Merriweather|Francois+One|Crete+Round|Josefin+Sans|Ubuntu" rel="stylesheet">
<!-- UIkit JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit-icons.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        

    </head>
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
<div class="uk-container-fluid">
    
        <div class="uk-position-relative uk-visible-toggle uk-light" uk-slideshow="ratio: 7:3; autoplay: true ">

    <ul class="uk-slideshow-items">
           <li>
            <div class="uk-position-cover" uk-slideshow-parallax="scale: 1.2,1.2,1">
            <img src="./images/poomex.png" alt="" uk-cover>
               </div>
            <div class="uk-position-center uk-position-small uk-text-center uk-light">
                <p class="uk-margin-remove madhav" >Madhav Textiles Cloth and Hosieries</p>
                
            </div>
        </li>
        <li>
           <div class="uk-position-cover" uk-slideshow-parallax="scale: 1.2,1.2,1">
            <img src="./images/poomex1.jpg" alt="" >
            </div>
        </li>
         <li>
           <div class="uk-position-cover" uk-slideshow-parallax="scale: 1.2,1.2,1">
            <img src="./images/poomex2.jpg" alt="" >
             </div>
        </li>
        <li>
            <video autoplay loop muted playslinline uk-cover>
                <source src="poomexad.mp4" type="video/mp4">
                
               
            </video>
        </li>
        <li>
            <video autoplay loop muted playslinline uk-cover>
                <source src="poomexad2.mp4" type="video/mp4">
                
               
            </video>
        </li>
    </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous" style="color: black;font-size: 55px;"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next" style="color: black;font-size: 55px;"></a>

    </div>
      </div>
   
              
<section>
  
  <div class="uk-container-large" >
       <div class="space"></div>
        <div class="uk-text-center uk-h3 about">
          About us
        </div>
        <div class="uk-text-center welcome">
          WELCOME! WE ARE <br> <span style="font-size: 40px;font-family: 'Crete Round', serif;color: #f138ff">Madhav Textiles Hosieries and Clothing</span>
        </div>
        <div class="">

        </div>
        <div class="uk-text-center uk-margin-top clean">
          A Whole sale textile company in narasaraopet which is located in Guntur district, Andhra Pradesh. <br>We provide the all kinds of clothing for men,women and children
        </div>
        <hr class="hr">
  </div>
</section>
<section style="background-color: #22f7cc;">
  <div class="uk-text-center vision uk-margin-bottom">
        Our Vision
      </div><br>
  <div class="uk-container uk-margin-left uk-margin-right  ">

  <div class="" uk-grid >
      <div class="uk-width-1-3@s uk-text-center ">
        <div class="uk-animation-toggle">
        <div class="uk-card  uk-animation-slide-right-medium uk-animation-reverse">
            <i class="far fa-lightbulb bulb"></i>
        </div>
    </div>
            
          <div class="title uk-text-center">
            <h3>01. Planning</h3>
          </div>

          <p class="uk-text-center uk-margin-small-top uk-margin-small-bottom desc">We plan the order taking in a first come first server basis and our planning is to reach the all products to all customers</p>
          


      </div>
      
      <div class="uk-width-1-3@s uk-text-center">
        <div class="uk-animation-toggle">
        <div class="uk-card  uk-animation-slide-right-medium uk-animation-reverse">
            <i class="fas fa-cogs tool "></i>
        </div>
    </div>

          <div class=" uk-text-center title">
            <h3>02. Implementation</h3>
          </div>

          <p class="uk-text-center uk-margin-small-top uk-margin-small-bottom desc">We implement the orders in a day to day schedule with respective towns and villages</p>
        
      </div>
      <div class="uk-width-1-3@s uk-text-center">
        <div class="uk-animation-toggle">
        <div class="uk-card  uk-animation-slide-right-medium uk-animation-reverse">
            <i class="fas fa-truck cloud"></i>
        </div>
    </div>

          <div class="title uk-text-center">
            <h3>03. Delivery</h3>
          </div>

          <p class="uk-text-center uk-margin-small-top uk-margin-small-bottom desc">We deliver the orders in a timely and precise manner and our goal is to reach the devlivery of the products intime </p>
         
      </div>
  </div>
  <div class="space">  </div>
  </div>
</section>
<section>
  <div class="uk-container-expand  containerNumber">
    <div class="uk-grid-divider uk-child-width-expand@s grid1 uk-padding-large " uk-grid>

    <div>
        <div class=" numbers">
            <span class="count">800</span>
        </div>
        <div class="happpy">
          Happy Customers
        </div>
    </div>
    <div>
      <div class="numbers">
          <span class="count">2000</span>
      </div>
      <div class="happpy">
        Orders completed
      </div>
    </div>
    <div>
      <div class="numbers">
          <span class="count"> 1000</span>
      </div>
      <div class="happpy">
        Deliveries
      </div>
    </div>
    <div>
      <div class="numbers">
          <span class="count"> 6324</span>
      </div>
      <div class="happpy">
        Hours worked
      </div>
    </div>
</div>
  </div>
</section>
<section style="background-color:#586cb5; ">
  
    <div class="space"></div>
      <div class="check uk-text-center check">
        Check Our
      </div>
      <div class="unique uk-text-center">
        Products
      </div>
      <hr class="hr1">
      
      
    
  <div class="uk-container">
   
    <div class="uk-text-center uk-margin-left" uk-grid>
    <div class="uk-width-1-3@s">
       
        <div class="uk-card" uk-scrollspy="cls: uk-animation-slide-top; repeat: true">
            <img src="./images/product.jpg" alt="" style="height: 350px;">
       
        </div>
    </div>
    <div class="uk-width-1-3@s">

        <div class="uk-card    " uk-scrollspy="cls: uk-animation-slide-top; repeat: true" >
        <img src="./images/product1.jpg" alt="" style="height: 350px;">

        </div>
    </div>
    <div class="uk-width-1-3@s">
       
        <div class="uk-card    " uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
            <img src="./images/product2.jpg" alt="" style="height: 350px;width: 80%">
        </div>
        
    </div>
      </div>
      <div class="uk-text-center uk-margin-left" uk-grid>
      <div class="uk-width-1-3@s">
        
          <div class="uk-card    " uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
              <img src="./images/product3.jpg" alt="" style="height: 350px;">
          </div>
          
      </div>
      <div class="uk-width-1-3@s"> 
          <div class="uk-card   " uk-scrollspy="cls: uk-animation-slide-bottom; repeat: true">
          <img src="./images/product4.jpg" alt="" style="height: 350px;" width="80%">
         
          </div>
      </div>
      <div class="uk-width-1-3@s">
         
          <div class="uk-card  " uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
              <img src="./images/product5.jpg" alt="" style="height: 350px;">
          
          </div>
      </div>
      </div><div class="space"></div>
        <a class="uk-button uk-button-default" href="gallery.html" style="font-weight: bold;color: aliceblue">More Products</a>

  </div>
     
  <div class="space"></div>
</section>
<section>
  <div class="uk-container-large meetContainer  ">
    <div class="">
      <div class="space">  </div>
      <div class="uk-text-center ">
        Meet Our
      </div>
      <div class="uk-text-center expert">
        Company Patners
      </div>
      <hr class="hr1">
      <div class="space"></div>
      
     
    </div>
       

          <div class="uk-text-center" uk-grid>
            <div class="uk-width-1-2@s" style="width: 50%"   >
            
                <div class="uk-card  uk-hover
                 " uk-scrollspy="cls: uk-animation-slide-left; repeat: true" >
                  <img src="./images/owner.jpg" alt="" >
                  <div class="uk-text-center " style="font-size: 20px;font-family: 'Francois One', sans-serif;color:blue">
                Palvadi Lakshmi Satyanarayana
              </div>
             
              </div>
            </div>
            <div class="uk-width-1-2@s" style="width: 50%">
              
                <div class="uk-card uk-hover
                  " uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
                  <img src="./images/owner2.jpg" alt=""  style="height: 260px;">
                  <div class="uk-text-center " style="font-size: 20px;font-family: 'Francois One', sans-serif;color:blue">
                Kotha Srinivasarao
              </div>
                
              </div>
            </div>
        </div>         
           
        <div class="space">  </div>
        </div>
  
</section>
<section>
  
  <div class="uk-container" style="background-color: #eda007;">
    <div class="space"></div>
    <div class="clients uk-text-center">
     Feedback of  Our
    </div>
    <div class="clients1 uk-text-center">
      Happy Clients
    </div>
    <hr class="hr1">
    <div class="" uk-grid>
        <div class="uk-width-1-2@s">
          <div class="uk-card uk-card-default uk-card-hover uk-card-body">
            <div class="testdes">

            The Shop was located in center of the town and the delivery was in time and they treat in a friendly environment
            </div>
            <div class="uk-align-right testHead">
              Adithya
            <div class=" testRole">
              Sri durga readymades
            </div>
            </div>

          </div>
        </div>

        <div class="uk-width-1-2@s">
          <div class="uk-card uk-card-default uk-card-hover uk-card-body">
            <div class="testdes">
            They have adequate stock to delivery the cloths as many as possible to retail shops. The marginal rate was enough to meet the owner needs 
            </div>
            <div class="uk-align-right testHead">
              Mahalakshmi
            <div class=" testRole">
              Sri lakshmi cloth stores
            </div>
            </div>
          </div>
        </div>
    </div>
    
    <div class="uk-margin-top " uk-grid>
        <div class="uk-width-1-2@s">
          <div class="uk-card uk-card-default uk-card-hover uk-card-body">
            <div class="testdes">
              The quality of the colths of the poomex and msp brand was very good. The give friendly discounts to the retailers
            </div>
            <div class="uk-align-right testHead">
              Alehkhya
            <div class=" testRole">
            Sri fashions
            </div>
            </div>

          </div>
        </div>

        <div class="uk-width-1-2@s">
          <div class="uk-card uk-card-default uk-card-hover uk-card-body">
            <div class="testdes">
              The biiling in this company was fully in digital format so that we can recheck the bills evn if e lost the bills. They have good backkup
            </div>
            <div class="uk-align-right testHead">
              Adinarayana
            <div class=" testRole">
              Venkatesh cloth readymades
            </div>
            </div>
          </div>
        </div>
    </div>
    <div class="spaceTest">


    
    </div>
    <div class="space1">  </div>
  </div>

</section>
<section>
  <div class="uk-container" style="background-color:#F9F9F9;">
    
    <div class="space">  </div>
        
        <div class="uk-text-center package">
          Deliverable Places
        </div>
        <hr class="hr">
        <div class="space"></div>
        <center>
        <div class="uk-container">
          
          <div uk-switcher="animation: uk-animation-fade">
            <button class="uk-button uk-button-primary" type="button" style="font-size: 20px;font-family: 'Bree Serif', serif;">Guntur</button>
            <button class="uk-button uk-button-danger" type="button" style="font-size: 20px;font-family: 'Bree Serif', serif;">Krishna</button>
            <button class="uk-button uk-button-secondary" type="button" style="font-size: 20px;font-family: 'Bree Serif', serif;">Prakasam</button>
           
        </div>
        <ul class="uk-switcher uk-margin">
            <li style="width: 50%; align-items: center;">
              <ul class="uk-list uk-list-divider">
                <li class="towns">Guntur Town and Rural</li>
                <li class="towns">Narasaropet</li>
                <li class="towns">Sattenapalli</li>
                <li class="towns">Macherla</li>
                <li class="towns">Gurajala</li>
                <li class="towns">Vinukonda</li>
                <li class="towns">Piduguralla</li>
                <li class="towns">Chilakaluripet</li><br>
              </ul>
            </li>
            <li style="width: 50%; align-items: center;">
              <ul class="uk-list uk-list-divider">
                <li class="towns">Vijayawada Central</li>
                <li class="towns">Vijayawada West & East</li>
                <li class="towns">Machilipatnam</li>
                <li class="towns">Suryapet</li><br>
              </ul>
            </li>
            <li style="width: 50%; align-items: center;">
              <ul class="uk-list uk-list-divider">
                <li class="towns">Chirala</li>
                <li class="towns">Bapatla</li>
                <li class="towns">Ongole</li>
                <li class="towns">Kanigiri</li>
                <li class="towns">Gidhaluur</li><br>
                
              </ul>
            </li>
        

        </ul>
      </div>
    </center>
  </div>

</section>
<div class="uk-container" style="background-color: #10ed82;">
   <div class="space"></div>
   <div class=" uk-text-center checkPost">
          Check Our
        </div>
        <div class="uk-text-center latest">
          Categories
        </div>
        <hr class="hr1">
        <div class="uk-text-center latestLoreum">
          Please check our clothing gallery of men, women and child
        </div>
        <div class="space">  </div>
    <div class="uk-text-center" uk-grid>
    <div class="uk-width-1-3@s">
        <div class="uk-card uk-card-default ">
            <div class="uk-card-media-top">
              <div class="uk-position-relative uk-visible-toggle uk-light" uk-slideshow>

                <ul class="uk-slideshow-items">
                  <li>
                      
                      <img src="./images/menpro.jpg" alt="" uk-cover>
                       
                  </li>
                  <li>
                      <img src="./images/menpro1.jpg" alt="" uk-cover>
                  </li>
                  <li>
                      <img src="./images/menpro2.jpg" alt="" uk-cover>
                  </li>
                  <li>
                      <img src="./images/menpro3.jpg" alt="" uk-cover>
                  </li>
                  <li>
                      <img src="./images/menpro4.jpg" alt="" uk-cover>
                  </li>
                </ul>

                <a class="uk-slidenav-large uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous" style="color:darkslategrey"></a>
                <a class="uk-slidenav-large uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next" style="color:darkslategrey"></a>

                </div>
                <br>
                    <div class="uk-text-center">
                      Mens Products
                    </div>
                    <div class="postLoreum">
                   Manufacures of our mens products are  <b>Poomex</b>, <b>Prisma</b>, <b>MSP Knit</b>, <b>Anu vimal</b>,
                    </div>
                    <div class="space1">  </div>
            </div>
        </div>
    </div>
    <div class="uk-width-1-3@s">
        <div class="uk-card uk-card-default ">
            <div class="uk-card-media-top">
              <div class="uk-position-relative uk-visible-toggle uk-light" uk-slideshow>

                <ul class="uk-slideshow-items">
                  <li>
                      
                      <img src="./images/women1.jpg" alt="" uk-cover>
                       
                  </li>
                  <li>
                      <img src="./images/women2.jpg" alt="" uk-cover>
                  </li>
                  <li>
                      <img src="./images/women3.jpg" alt="" uk-cover>
                  </li>
                  <li>
                      <img src="./images/women4.jpg" alt="" uk-cover>
                  </li>
                  <li>
                      <img src="./images/women5.jpg" alt="" uk-cover>
                  </li>
                </ul>

                <a class="uk-slidenav-large uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous" style="color:darkslategrey"></a>
                <a class="uk-slidenav-large uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next" style="color:darkslategrey"></a>

                </div>
                <br>
                    <div class="uk-text-center">
                      Womens Products
                    </div>
                    <div class="postLoreum">
                   Manufacures of our mens products are  <b>Poomex</b>, <b>Prisma</b>, <b>MSP Knit</b>, <b>Anu vimal</b>,
                    </div>
                     <div class="space1">  </div>
            </div>
        </div>
    </div>
    <div class="uk-width-1-3@s">
       <div class="uk-card uk-card-default ">
            <div class="uk-card-media-top">
              <div class="uk-position-relative uk-visible-toggle uk-light" uk-slideshow>

                <ul class="uk-slideshow-items">
                  <li>
                      
                      <img src="./images/halfsleeve.jpg" alt="" uk-cover>
                       
                  </li>
                  <li>
                      <img src="./images/topsandtees.jpg" alt="" uk-cover>
                  </li>
                  <li>
                      <img src="./images/fullsleeve.jpg" alt="" uk-cover>
                  </li>
                  <li>
                      <img src="./images/halfsleeve.jpg" alt="" uk-cover>
                  </li>
                  <li>
                      <img src="./images/topsandtees.jpg" alt="" uk-cover>
                  </li>
                </ul>

                <a class="uk-slidenav-large uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous" style="color:darkslategrey"></a>
                <a class="uk-slidenav-large uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next" style="color:darkslategrey"></a>

                </div>
                <br>
                    <div class="uk-text-center">
                      Mens Products
                    </div>
                    <div class="postLoreum">
                   Manufacures of our mens products are  <b>Poomex</b>, <b>Prisma</b>, <b>MSP Knit</b>, <b>Anu vimal</b>,
                    </div>
                     <div class="space1">  </div>
            </div>
        </div>
    </div>
</div>
<div class="space"></div>
</div>
<section>
  
</section>
<section style="background-color: #;" >
  <div class="uk-text-center latest"><br>
          Our Location
        </div>  
  <div class="uk-container " uk-grid>
     <div class="uk-width-1-3@s">
        <div class="uk-card uk-card-hover  uk-card-body uk-text-center location" uk-scrollspy="cls: uk-animation-scale-up ; repeat: true">
          Our Outlet<br>
          <div class="uk-list uk-text-center locationad">
            <table>
                <tr><td><span uk-icon="location"></span></td><td>Madhav Textiles Retail merchant</td></tr>
                <tr><td></td><td >Mahatma gandhi cloth market</td></tr>
                <tr><td></td><td >Kota center, Narasaraopet</td></tr>
                <tr><td><span uk-icon="receiver"></span></td><td  >08647226229</td></tr>
            </table>
            
          </div>
        </div>
    </div>
    <div class="uk-width-1-3@s">
        <div class="uk-card uk-card-hover uk-card-body uk-text-center location" uk-scrollspy="cls: uk-animation-scale-down ; repeat: true">
          Main Address<br>
          <div class="uk-list uk-text-center locationad">
            <table>
                <tr><td><span uk-icon="location"></span></td><td>Madhav Textiles Cloth & Hosieries</td></tr>
                <tr><td></td><td >Panasthota,Mallamma center,</td></tr>
                <tr><td></td><td > Narasaraopet,Guntur District</td></tr>
                <tr><td><span uk-icon="receiver"></span></td><td >08647226229</td></tr>
            </table>
            
          </div>
        </div>
    </div>

 <div class="uk-width-1-3@s">
     <div class="uk-card  uk-card-body uk-text-center location" uk-scrollspy="cls: uk-animation-scale-up ; repeat: true">
     Connect With Us
     <div class="" style="color: black;font-size: 17px;">
     <i class="fas fa-phone uk-margin-right" style="font-size: 26px;color:dodgerblue"></i> 9885126229, 9246464229 
     </div><br>
     <div class=" " style="color: black;font-size: 17px;">
     <i class="fas fa-envelope uk-margin-right" style="font-size: 26px;color:dodgerblue"></i> <a href="mailto:madhavtextilesnarasaraopet@gmail.com" class="uk-link-heading uk-margin-left" style="font-size: 10px;">madhavtextilesnarasaraopet@gmail.com</a>
     </div>
     </div>
 </div>
  </div>
  <div class="space"></div>
</section>
<section>
<div class="uk-container conatainerFoot">
<div class="space">  </div>
    <div class="uk-text-center contact">
    Contact Us
    </div>
    <div class="uk-text-center details">
      Submit your details 
    </div><div class="space">  </div>
    <form action="index.php" method="POST" class="uk-container uk-margin-left uk-margin-right" >
      <div class="uk-column-1-2@s">
        <div class="">
          <input type="text" name="frontName" class="uk-input name" value="" placeholder="Name" required>
        </div>
        <div class="">
          <input type="email" name="frontEMail" class="uk-input name" value="" placeholder="email" required>
        </div>
      </div><br>
      <div class="uk-column-1-1@s">
        <input type="text" name="frontSubject" class="uk-input name" value="" placeholder="Subject" required>
      </div><br>
      <div class="uk-column-1-1@s">
            <textarea class="uk-textarea  textarea" name="frontText" rows="5" placeholder="Message"></textarea>
        </div><br>
        <div class=""><center>
          <input type="submit" name="frontButton" class="uk-button-default " value="Send Message"></center>
            
        </div>
      </form>
      <hr >
        <div class="uk-column-1-3@s">
            <div class="">
              copyright &copy 2016.All rights reserved to admin
            </div>
            <div class="uk-text-center">
              <a href="#"><i class="fas fa-chevron-up "></i></a>
            </div>
           
        </div>
         <div class="space">  </div>
  </div>
</section>
    </body>
    <script>
            $('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 8000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
    </script>
</html>
