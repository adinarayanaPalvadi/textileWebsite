<?php include ('dbConnect.php') ?>
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
        <style type="text/css">
            .space
            {
             
                height: 50px;
            }
            .cont
            {
                background: #9D50BB;  /* fallback for old browsers */
                background: -webkit-linear-gradient(to right, #6E48AA, #9D50BB);  /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to right, #6E48AA, #9D50BB); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

            }
            .admin
            {
                font-size: 50px;
                font-family: 'Merriweather', serif;
                color: #f44842;
                font-weight: bold;
            }
            .to
            {
                font-size: 30px;
                font-weight: 600;
                color: orange;
            }
            .thed
            {
                font-size: 30px;
                color: #2171f2;
                font-weight: 600;
            }
            .body
            {
                color: black;
                font-weight:500;
                font-size: 20px;
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
        <div class="uk-container">

            <div class="space"></div>
                <form action="billBetween.php" method="POST" class="uk-text-center">
                    <label class="uk-margin-right to">To</label>
                    <input type="date" name="dates" class="uk-margin-large-right" style="height: 30px;">
                    <label class="uk-margin-right to">From</label>
                    <input type="date" name="dates1" style="height: 30px;">
                    <div class="space"></div>
                    <div class="uk-text-center">
                        <button type="submit" name="between" class="uk-button uk-button-danger">Search</button>
                    </div>
                </form>
            
        </div>
        <div class="space"></div><div class="space"></div>
        <?php  
            if (isset($_POST['between'])) {
                $locate_query = "SELECT * FROM bill_table WHERE (bill_date BETWEEN  '".  $_POST['dates'] ."'  AND '".   $_POST['dates1'] ."' )";
                $locate_status = mysqli_query($connect,$locate_query);
                
                echo '<div class="uk-container">
                    <div class="uk-text-center">
                        <table class="uk-table">
                            <tr class="thed">
                                <td>Bill number</td>
                                <td>Order date</td>
                                <td>Shop name</td>
                                <td>Location</td>
                            </tr>';
                if (mysqli_num_rows($locate_status)) {
                    while ($row = mysqli_fetch_array($locate_status)) {
                        $bill = $row['bill_no'];
                        $shopname = $row['shop_name'];
                        $location = $row['location'];
                        $date = $row['bill_date'];
                        echo '<tr class="body">
                        <td>';echo $bill; echo'</td>
                        <td>';echo $date; echo'</td>
                        <td>';echo $shopname; echo'</td>
                        <td>';echo $location; echo'</td>
                    </tr>';
                    }
                }
            }
           echo ' </table>
            </div>
        </div>';
        ?>
                    
                
    </body>
</html>