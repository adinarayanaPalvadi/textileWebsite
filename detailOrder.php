<?php include ('dbConnect.php') ?>
<?php if (!isset($_SESSION['mailId']) && !isset($_SESSION['name'])) { header("Location:signIn.php"); }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Madhav Textiles</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/css/uikit.min.css" />
        <link rel="stylesheet" href="order.css" >
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Lobster|Crete+Round|Merriweather+Sans" rel="stylesheet">
<!-- UIkit JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit-icons.min.js"></script>
        <script type="text/javascript">
     
			
        </script>
        </head>
        <style type="text/css">
        	.view
        	{
        		font-size: 35px;
        		font-family: 'Lobster', cursive;
        		color: #fb3e2e;
        	}
        	.space
        	{
        		height: 20px;
        	}
        	.space1
        	{
        		height: 200px;
        	}
        	.con1
        	{
        		background: #1CD8D2;  /* fallback for old browsers */
                background: -webkit-linear-gradient(to right, #93EDC7, #1CD8D2);  /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to right, #93EDC7, #1CD8D2); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        	}
        	.head
        	{
        		font-size: 22px;
        		font-weight: 500;
        		color: #FF6F02;
        	}
        	body
        	{
        		background: #EDE574;  /* fallback for old browsers */
				background: -webkit-linear-gradient(to right, #E1F5C4, #EDE574);  /* Chrome 10-25, Safari 5.1-6 */
				background: linear-gradient(to right, #E1F5C4, #EDE574); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        	}
        </style>
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
        		<div class="uk-container con1">
        			<div class="space"></div>
        			<div class="uk-text-center view">
        				Detailed order View
        			</div>
        			<div class="space"></div>
        		</div>
        	</section>
        	<section>
                <div id ="printableArea">
        		<div class="uk-container" >
        			<?php  
        				$order_view = "SELECT * FROM order_details WHERE bill_id = ". $_POST['orderBill'];
					 	$orderview_status = mysqli_query($connect,$order_view);
        			echo '<div class="uk-text-center" style="font-size:35px;font-weight:600;font-family:"Merriweather Sans", sans-serif;text-transform:capitalize">';
        			echo $_SESSION['name']; 
        			echo '</div>';

        			echo'</span></div>';
        			echo '<table class="uk-table" style="text-align: center;">
        				<tr class="head">
        					<td>Brand</td>
        					<td>Item</td>
        					<td>Model</td>
        					<td>Pieces</td>
        				</tr>';
        				if(mysqli_num_rows($orderview_status) )
						 	{
						 		while ($row = mysqli_fetch_array($orderview_status)  ) {
						 			$Oshop =$row['shopname'];
						 			$Obill = $row['bill_id'];
						 			$Obrand = $row['brand'];
						 			$Omodel = $row['model'];
						 			$Osize = $row['size'];
						 			$Opieces = $row['pieces'];
						 			$Odate = $row['order_date'];
        				echo '<tr style="">
        					<td style="font-size:20px;color:black;font-family:sans-serif;font-weight:400;">'; echo "" .$Obrand. "" ; echo '</td>
        					<td style="font-size:20px;color:black;font-family:sans-serif;font-weight:400;">'; echo "" .$Omodel. "" ; echo '</td>
        					<td style="font-size:20px;color:black;font-family:sans-serif;font-weight:400;">'; echo "" .$Osize. "" ; echo '</td>
        					<td style="font-size:20px;color:black;font-family:sans-serif;font-weight:400;">'; echo "" .$Opieces. "" ; echo '</td>
        				</tr>';
        				}
						 	}
						 	echo '<div><span class="uk-text-left uk-margin-left" style="color:#e819e4;font-weight:bold;font-size:25px;">Order date:';
						 	echo'&nbsp;&nbsp;&nbsp;';
        					echo"".$Odate. "";
        			echo '</table>'
        			?>
        		</div>
            </div>
        		<div class="uk-text-center">
        			<button class="uk-button uk-button-primary uk-margin-large-top" onclick="printContent('printableArea')">Print</button>
        		</div>	
        	</section>
        	<div class="space1"></div>
        </body>
        <script type="text/javascript">
            
        function printContent(el)
        {
            var restorepage = document.body.innerHTML;
            var printContent = document.getElementById(el).innerHTML;
            document.body.innerHTML= printContent;
            window.print();
            document.body.innerHTML = restorepage;
        }
        </script>
</html>

