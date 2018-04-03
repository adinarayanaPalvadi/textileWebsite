<?php include ('dbConnect.php') ?>
<?php if (!isset($_SESSION['mailId']) && !isset($_SESSION['name'])) { header("Location:signIn.php");}?>
<!DOCTYPE html>
<html>
    <head>
        <title>Madhav Textiles</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/css/uikit.min.css" />
        <link rel="stylesheet" href="order.css" >
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Ubuntu|Padauk|Cabin" rel="stylesheet">
<!-- UIkit JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit-icons.min.js"></script>
        <style type="text/css">
            .space
            {
                height: 20px;
            }
            .cart
            {
                font-size: 35px;
                font-family: 'Ubuntu', sans-serif;
                color: #FB3E2E;
            }
            .heading
            {
                font-size: 23px;
                font-weight: 500;
                font-family: 'Cabin', sans-serif;
            }
            .shop
            {
                font-size: 28px;
                font-weight: 600;
                font-family: 'Bree Serif', serif;
                color: #7742f4;
            }
            .space1
            {
                height: 50px;
            }


            </style>
    </head>
    <body>
         <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
    <nav class="uk-navbar-container" uk-navbar style="position: relative; z-index: 980;">
        <div class="uk-navbar-left">

            <ul class="uk-navbar-nav data-uk" data-uk-scrollspy-nav="{closest:'li'}">
                <li class="uk-active"><a href="index.php" style="font-weight: 500; color: #5c3fff;font-size: 18px;font-family: 'Josefin Sans', sans-serif;"><span uk-icon="icon: home; ratio: 0" class="uk-margin-small-right uk-margin-small-bottom" style="color: #ff5f49"></span>Home</a></li>
                <li><a href="gallery.html" style="font-weight: 500; color: #5c3fff;font-size: 18px;font-family: 'Josefin Sans', sans-serif;"><span uk-icon="icon: image; ratio: 0" class="uk-margin-small-right uk-margin-small-bottom" style="color: #ff5f49"></span>Gallery</a></li>
                 <li><a href="orders.php" style="font-weight: 500; color: #5c3fff;font-size: 18px;font-family: 'Josefin Sans', sans-serif;">Order Now</a></li> 
                 <li><a href="cart.php" style="font-weight: 500; color: #5c3fff;font-size: 18px;font-family: 'Josefin Sans', sans-serif;"><span uk-icon="icon: cart; ratio: 0" class="uk-margin-small-right uk-margin-small-bottom" style="color: #ff5f49"></span>Cart</a></li> 
                 <li><a href="myOrders.php" style="font-weight: 500; color: #5c3fff;font-size: 18px;font-family: 'Josefin Sans', sans-serif;"><span uk-icon="icon: cart; ratio: 0" class="uk-margin-small-right uk-margin-small-bottom" style="color: #ff5f49"></span>My orders</a></li> 
            </ul>

        </div>
        <div class="uk-navbar-right">

        <ul class="uk-navbar-nav">
            <form action="orders.php" method="POST">
            <li class="uk-margin-right"><a  href="signIn.php"  type="submit" name="logout" style="font-weight: 600;font-size: 20px;color: #2762f7" ><span uk-icon="icon: sign-out; ratio: 1.3" class="uk-margin-small-right" style="color: #ff5f49" ></span>Log out</a></li>
        </form>
          </ul>
        </div>
    </nav>
</div>
        
        <section>
             <?php
                global $connect;
                global $shop_name;

            $query = "SELECT * FROM cart_items WHERE email = '".$_SESSION['mailId']."'";
            $status1 = mysqli_query($connect,$query);
           echo ' <div class="uk-container" style="background: #1CD8D2;  /* fallback for old browsers */
                background: -webkit-linear-gradient(to right, #93EDC7, #1CD8D2);  /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to right, #93EDC7, #1CD8D2);">
                <div class="space"></div>
                <div class="uk-text-center cart">
                    Your Cart Or Added Items
                </div>

            <div class="space"></div>

            </div>
            <div class="space"></div>
        <div class="uk-text-right">
            
        </section>
        <section>
            <div class="space"></div>
            <div class="uk-container">';
                echo'
                <div class="uk-text-center">
                    <table class="uk-table">
                        <tr style="font-size: 28px;
                font-weight: 600;
                font-family: "Bree Serif", serif;
                ">
                            <td>Brand Name</td>
                            <td>Item type</td>
                            <td>Size</td>
                            <td>Pieces</td>
                            <td>Action</td>
                        </tr>';
                    echo '<tr style="text-align:;">';
                                     // echo $query;
                if (mysqli_num_rows($status1)   ) {
                 
                while ($row1 = mysqli_fetch_array($status1)) {
                    $size = $row1['item_size'];
                    $brand = $row1['brand_name'];
                    $model= $row1['item_model'];
                    $pieces = $row1['pieces'];
                    $name = $row1['shopname'];
                              echo '  <td style="color:black;font-weight:500;">';
                                echo "".$brand."";
                                echo'</td>
                                <td style="color:black;font-weight:500;">';
                                echo "".$model."";
                                echo'</td>
                                <td style="color:black;font-weight:500;">';
                                echo "".$size."";
                                echo'</td>
                                <td style="color:black;font-weight:500;">';
                                echo "".$pieces."";
                                echo'</td>
                                <td>

                                <form method="POST" action="cart.php" >
                                    <button type="submit" class="uk-button uk-button-primary uk-button-small " value='.$row1['s_no'].' name="btnRemove">Remove</button>
                                </form>
                                </td>
                            </tr>';
                                     
                }
                echo '<div class="uk-text-center shop">';echo "".$name.""; echo '</div>';
            }
                    echo '</table>
                </div>';
                ?>
                 </section>
            
            <form action="cart.php" method="POST">
            <div class="uk-text-center" >
                <button class="uk-button uk-button-primary place" name="placeOrder" style="background-color: red">Place Order</button>
            </div>
        </form>
            <div class="space1"></div>
       
    </body>
    </html>