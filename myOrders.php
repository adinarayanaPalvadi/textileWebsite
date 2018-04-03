<?php include ('dbConnect.php') ?>
<?php if (!isset($_SESSION['mailId']) && !isset($_SESSION['name'])) { header("Location:signIn.php");}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Madhav Textiles</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/css/uikit.min.css" />
        <link rel="stylesheet" href="order.css" >
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Righteous|Crete+Round|Roboto" rel="stylesheet">
<!-- UIkit JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit-icons.min.js"></script>
        <style type="text/css">
            .space
            {
                height:35px;
            }
            .order
            {
                font-size: 40px;
                font-family: 'Bree Serif', serif;
                letter-spacing: 1px;
                color: #fb3e2e;
                line-height: 35px;
            }
            .con1
            {
               background: #1CD8D2;  /* fallback for old browsers */
                background: -webkit-linear-gradient(to right, #93EDC7, #1CD8D2);  /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to right, #93EDC7, #1CD8D2); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

            }
            .you
            {
                font-size: 30px;
                font-family: 'Righteous', cursive;
            }
            .thead
            {
                font-size: 20px;
                font-family: 'Crete Round', serif;
                color: #2767ce;
            }
            .space1
            {
                height: 250px;
            }
           body
           {
            background: #DAE2F8;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #D6A4A4, #DAE2F8);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #D6A4A4, #DAE2F8); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

           }
        </style>
    </head>
    <body >
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
        <div class="uk-container con1">
            <div class="space"></div>
            <div class="uk-text-center order">
                Welcome to Orders Section
            </div>
            <div class="space"></div>
            <div class="space"></div>
       
        <section id="sec">
                <div class="space"></div>
                <div class="uk-text-left uk-margin-large-left you">
                    Your orders
                </div>
        </section>
        <section>
            <?php
            $order_query = "SELECT * FROM bill_table WHERE email = '".$_SESSION['mailId']. "'";
            $order_status = mysqli_query($connect,$order_query);
            
           echo '<div class="uk-container" style="text-align:center">
                <div>
                    <table class="uk-table uk-table-divider uk-table-hover uk-table-small uk-table-responsive">
                        <tr class="thead">
                            <td>
                                Order id
                            </td>
                            <td>
                                Shop name
                            </td>
                            <td>
                                Order date
                            </td>
                        </tr>';
                        if(mysqli_num_rows($order_status))
                         {
                            while ($row = mysqli_fetch_array($order_status)) {
                                    $name1 = $row['shop_name'];
                                    $mail = $row['email'];
                                    $bill = $row['bill_no'];
                                    $date = $row['bill_date'];
                                    $mob = $row['mobile'];
                    echo '<tr>
                            <td>';
                                echo "
                                    <form action='detailOrder.php' method='POST'>
                                <button class='uk-button' name='orderBill' type='submit' value=".$bill." style='background-color:#ff447c;color:black;font-size:20px;font-weight:500'> <i class='fas fa-shopping-cart uk-margin-right' style='color:white'></i>" .$bill. "</button>";
                                echo "</form>";
                            echo '</td>
                             <td style="font-size:20px;font-weight:600;color:black;">';
                                 echo "" .$name1. "";
                            echo '
                            </td>
                            <td style="font-size:20px;font-weight:600;color:black;">';
                                 echo "" .$date. "";
                            echo '
                            </td>
                        </tr>';
                        }
            }
                    echo '</table>
                </div>
            </div>';
            
            ?>
        </section>
        <div class="space1"></div>
    </body>
</html>