<?php include ('dbConnect.php') ?>
<?php
    // if (!isset($_SESSION['mailId']) ) {
    //     if (!$_SESSION['mailId']=='asd@awd') {
    //          header("Location:admin.php");
    //     }
       
    // }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Madhav Textiles</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/css/uikit.min.css" />
        <link rel="stylesheet" href="order.css" >
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Merriweather|Lobster|Padauk|Rubik" rel="stylesheet">
<!-- UIkit JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit-icons.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular.min.js"></script>
        <style type="text/css">
            .admin
            {
                font-size: 50px;
                font-family: 'Merriweather', serif;
                color: #f44842;
                font-weight: bold;
            }
            .space
            {
                height: 30px;

            }
            .cont
            {
                background: #9D50BB;  /* fallback for old browsers */
                background: -webkit-linear-gradient(to right, #6E48AA, #9D50BB);  /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to right, #6E48AA, #9D50BB); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

            }
            .search
            {
                font-size: 30px;
                font-family: 'Lobster', cursive;
                color: #e218d8;
            }
            body
            {
                background-image: url('background.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
                background-position: center;
                height: 1200px;
            }
            .date
            {
                font-size: 20px;
                font-weight: bold;
                color: #28dde0;
            }
            .but
            {
                background-color: #4542f4;
            }
            .bill
            {
                font-size: 25px;
                font-family: 'Rubik', sans-serif;
                color: #27d121;
                text-align:center;
            }
            .shop
            {
                font-size: 25px;
                font-weight: 600;
                color: #7716ff;
            }
        </style>
    </head>
    <body>
        <div class="uk-container cont" >
            <div class="space"></div>
            <div class="uk-text-center admin">
                Welcome to Admin section
            </div>
            <div class="space"></div>
        </div>
        <div class="space"></div>
        <section>
            <div class="uk-text-left uk-margin-left search">
                Search By
            </div>
            <div class="uk-container uk-text-center">
                <div uk-switcher="animation: uk-animation-fade">
                    <button class="uk-button uk-button-default "  type="button" style="background-color: #47a6ef;color: white;font-weight: 600;" >Shop name</button>
                    <button class="uk-button uk-button-default" type="button"  style="background-color: #1fc419;color: white;font-weight: 600;">By Date</button>
                    <button class="uk-button uk-button-default" type="button" style="background-color: #ff511c;color: white;font-weight: 600;" >By Location</button>
                    <button class="uk-button uk-button-default" type="button" style="background-color: #ffd800;color: white;font-weight: 600;" >By Bill Id</button>
                </div>

                <ul class="uk-switcher uk-margin">
                    <li>
                        <form action="admin.php" method ="POST">
                            <div class="uk-margin">
                                <input class="uk-input uk-form uk-width-1-4" name="shop_name" type="text" placeholder="Enter the shop name" style="color: black;font-weight: 500;"><br>
                                <div class="space"></div>
                                <button type="submit" name="btnViewShopList" class="uk-button uk-button-danger">Search</button>
                            </div>
                        </form>

                    </li>
                    <li>
                        <form action="admin.php" method="POST">
                            <div class="uk-text-center date">
                                <span class="uk-margin-right">Enter Date</span>
                                <input type="date" name="order_date" style="height: 20px;">
                            </div>
                            <div class="space"></div>
                            <button type="submit" class="uk-button uk-button-danger" name="btnViewDate">Search</button>
                        </form>

                    </li>
                    <li>
                        <form action="admin.php" method="POST">
                            <div class="uk-margin">
                                <input class="uk-input uk-form uk-width-1-4" type="text" list="loc" placeholder="Enter the location" name="locate" style="color: black;font-weight: 500;">
                                    <datalist id="loc">
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
                                <br>
                                <div class="space"></div>
                                <button type="submit" class="uk-button uk-button-danger" name="btnViewLocate">Search</button>
                            </div>
                        </form>
                    </li>
                    <li>
                         <form action="admin.php" method ="POST">
                            <div class="uk-margin">
                                <input class="uk-input uk-form uk-width-1-4" name="bill_no" type="text" placeholder="Enter the Bill number" style="color: black;font-weight: 500;"><br>
                                <div class="space"></div>
                                <button type="submit" name="btnOrderView" class="uk-button uk-button-danger">Search</button>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>  
        </section>
        <div class="space"></div>
        <div id="printableArea">
        <section>
            <?php 
            if (isset($_POST['btnViewShopList'])) {
    
                $shop_query = "SELECT * FROM bill_table WHERE shop_name = '" . $_POST['shop_name'] . "'";
                $shop_status = mysqli_query($connect,$shop_query);
            echo '<div class="uk-container">
                <center>
                    <table class="uk-table" style="width: 50%;">
                        <tr class="bill">
                            <td>Bill number</td>
                            <td>Bill Date</td>
                            <td>Shop name</td>
                        </tr>';
                        if (mysqli_num_rows($shop_status)) {
                            while ($row=mysqli_fetch_array($shop_status)) {
                                $bill = $row['bill_no'];
                                $Shop = $row['shop_name'];
                                $billDate = $row['bill_date'];
                        echo '<tr style="color:black;text-align:center;font-weight:500;text-transform:capitalize;">
                            <td>'; echo $bill ;   echo'</td>
                            <td>'; echo $billDate ;   echo'</td>
                            <td>';echo $Shop ;   echo'</td>
                            </tr>';
                   }
               }
                    echo'</table>';
               echo ' </center>
            </div>';
        }
            ?>
        </section>
        <section>
            <?php 
            if (isset($_POST['btnViewDate'])) {
    
                $date_query = "SELECT * FROM bill_table WHERE bill_date = '" . $_POST['order_date'] . "'";
                $date_status = mysqli_query($connect,$date_query);
            echo '<div class="uk-container">
                <center>
                    <table class="uk-table" style="width: 50%;">
                        <tr class="bill">
                            <td>Bill number</td>
                            <td>Bill Date</td>
                            <td>Shop name</td>
                        </tr>';
                        if (mysqli_num_rows($date_status)) {
                            while ($row=mysqli_fetch_array($date_status)) {
                                $bill = $row['bill_no'];
                                $Shop = $row['shop_name'];
                                $billDate = $row['bill_date'];
                        echo '<tr style="color:black;text-align:center;font-weight:500;text-transform:capitalize;">
                            <td>'; echo $bill ;   echo'</td>
                            <td>'; echo $billDate ;   echo'</td>
                            <td>';echo $Shop ;   echo'</td>
                            </tr>';
                   }

               }



                    echo'</table>';
               echo ' </center>
            </div>';
        }
            ?>
        </section>
         <section>
            <?php 
            if (isset($_POST['btnViewLocate'])) {
    
                $locate_query = "SELECT * FROM bill_table WHERE location = '" . $_POST['locate'] . "'";
                $locate_status = mysqli_query($connect,$locate_query);

            echo '<div class="uk-container">
                <center>
                    <table class="uk-table" style="width: 50%;">
                        <tr class="bill">
                            <td>Bill number</td>
                            <td>Bill Date</td>
                            <td>Shop name</td>
                        </tr>';
                        if (mysqli_num_rows($locate_status)) {
                            while ($row=mysqli_fetch_array($locate_status)) {
                                $bill = $row['bill_no'];
                                $Shop = $row['shop_name'];
                                $billDate = $row['bill_date'];
                        echo '<tr style="color:black;text-align:center;font-weight:500;text-transform:capitalize;">
                            <td>'; echo $bill ;   echo'</td>
                            <td>'; echo $billDate ;   echo'</td>
                            <td>';echo $Shop ;   echo'</td>
                            </tr>';
                   }
               }
               else{
                    echo '<script>
                        alert("could not find any location");
                    </script>';
               }
                    echo'</table>';
               echo ' </center>
            </div>';
        }
            ?>
        </section>
        <section>
            <?php 
            if (isset($_POST['btnOrderView'])) {
                
                $bill_query = "SELECT * FROM order_details WHERE bill_id = '" . $_POST['bill_no'] . "'";
                $bill_status = mysqli_query($connect,$bill_query);

            echo '<div class="uk-container">';
           
               echo' <center>
                    <table class="uk-table" style="width: 50%;">
                        <tr class="bill">
                            <td>Brand</td>
                            <td>Model</td>
                            <td>Size</td>
                            <td>Pieces</td>
                            <td>Order Date</td>
                        </tr>';
                        if (mysqli_num_rows($bill_status)) {
                            while ($row=mysqli_fetch_array($bill_status)) {
                                 $Bshop = $row['shopname'];
                                $Bbillid = $row['bill_id'];
                                $Bbrand = $row['brand'];
                                $Bmodel = $row['model'];
                                $Bsize = $row['size'];
                                $Bpieces= $row['pieces'];
                                $Blocation = $row['location'];
                                $Bdate = $row['order_date'];
                        echo '<tr style="color:black;text-align:center;font-weight:500;text-transform:capitalize;">
                            <td>'; echo $Bbrand ;   echo'</td>
                            <td>'; echo $Bmodel ;   echo'</td>
                            <td>';echo $Bsize ;   echo'</td>
                            <td>';echo $Bpieces ;   echo'</td>
                            <td>';echo $Bdate ;   echo'</td>
                            </tr>';
                   }
               }
                echo '<div class="uk-text-center shop">';
                echo  $Bshop;
            echo '</div>';
                    echo'</table>';
               echo ' </center>
            </div>';
        }
            ?>
        </section>
        <section>
            
        </section>
    </div>
    <div class="uk-text-center">
        <button onclick="printContent('printableArea')" class="uk-button uk-button-primary"> Print</button>
    </div>
    <div class="uk-text-center">
        <a href="billBetween.php"> Search here  </a> To fill bills between two dates
    </div>
    </body>
    <script>
        function printContent(el)
        {
            var restorepage = document.body.innerHTML;
            var printcontent = document.getElementById(el).innerHTML;
            document.body.innerHTML= printcontent;
            window.print();
            document.body.innerHTML = restorepage;
        }
</script>
</html>