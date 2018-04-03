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
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Ubuntu|Padauk|Roboto" rel="stylesheet">
<!-- UIkit JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit-icons.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular.min.js"></script>
        <style type="text/css">
            .space1
            {
                height: 50px;
            }
            @media screen and (max-width: 600px) {
              
              }
            }
        </style>
        <!-- <script type="text/javascript">
            var app = angular.module("myApp", [ ]).controller("orderController",['$scope', function( $scope )
            {
                $scope.brands = {
                    'Poomex':{
                        'Premium RN':[ '75','80','85','90','95','100'],
                        'Premium Rns':[ '75','80','85','90','95','100'],
                        'Flexrib Rns':[ '75','80','85','90','95','100'],
                        'Golden Rn':[ '75','80','85','90','95','100'],
                        'Golden Rns':[ '75','80','85','90','95','100'],
                        'FlexRib Rns':[ '75','80','85','90','95','100'],
                        'Cotton Shirts': ['90','95','100']
                    },
                    'Prisma':{
                        'Capri':[ 'Small','Medium','Large','Extra Large' ],
                        'SlimFit':[ 'Small','Medium','Large','Extra Large' ],
                        'Bermuda':[ 'Small','Medium','Large','Extra Large' ],
                        'Trackpant':[ 'Small','Medium','Large','Extra Large' ]
                    },
                    'MSP':{
                        'RNS':['40','45','50','55','60','65','70','75'],
                        'RNBS':['40','45','50','55','60','65','70','75'],
                        'Remo Junior':['40','45','50','55','60','65','70','75'],
                        'CoolCotton':['40','45','50','55','60','65','70','75']
                    },
                    'Janson':{
                        'Single':[ '1','2','3','4','5', ],
                        'Than':[ '1','2','3','4','5', ]
                    }
                };
                $scope.GetSelectedBrand = function(){
                    $scope.strBrand = document.getElementById("brand").value;
                };
                $scope.GetSelectedModel = function(){
                    $scope.strBrand = document.getElementById("model").value;
                };
                
            }]);
        </script> -->
    </head>
    <body ng-app="myApp">
        <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar" >
    <nav class="uk-navbar-container" uk-navbar style="position: relative; z-index: 980;">
        <div class="uk-navbar-left">

            <ul class="uk-navbar-nav ">
                <li class="uk-active"><a href="index.php" style="font-weight: 500; color: #5c3fff;font-size: 18px;font-family: 'Josefin Sans', sans-serif;"><span uk-icon="icon: home; ratio: 0" class="uk-margin-small-right uk-margin-small-bottom" style="color: #ff5f49"></span>Home</a></li>
                <li><a href="gallery.html" style="font-weight: 500; color: #5c3fff;font-size: 18px;font-family: 'Josefin Sans', sans-serif;"><span uk-icon="icon: image; ratio: 0" class="uk-margin-small-right uk-margin-small-bottom" style="color: #ff5f49"></span>Gallery</a></li>
                 <li><a href="orders.php" style="font-weight: 500; color: #5c3fff;font-size: 18px;font-family: 'Josefin Sans', sans-serif;">Order Now</a></li> 
                 <li><a href="cart.php" style="font-weight: 500; color: #5c3fff;font-size: 18px;font-family: 'Josefin Sans', sans-serif;"><span uk-icon="icon: cart; ratio: 0" class="uk-margin-small-right uk-margin-small-bottom" style="color: #ff5f49"></span>Cart</a></li> 
                 <li><a href="myOrders.php" style="font-weight: 500; color: #5c3fff;font-size: 18px;font-family: 'Josefin Sans', sans-serif;"><span uk-icon="icon: cart; ratio: 0" class="uk-margin-small-right uk-margin-small-bottom" style="color: #ff5f49"></span>My orders</a></li> 
            </ul>

        </div>
        <div class="uk-navbar-right">

        <ul class="uk-navbar-nav >
            <form action="orders.php" method="POST">
            <li class="uk-margin-right"><a  href="signIn.php"  type="submit" name="logout" style="font-weight: 600;font-size: 20px;color: #2762f7" ><span uk-icon="icon: sign-out; ratio: 1.3" class="uk-margin-small-right" style="color: #ff5f49" ></span>Log out</a></li>
        </form>
          </ul>
        </div>
    </nav>
</div>
        
        <!-- <div class="uk-container">
            <div class="uk-text-center uk-margin-top purchase">
                You can Purchase order From this Section
            </div>
            <div class="space"></div>
            <form action="orders.php" method="GET">
            <div class="uk-text-center">
            <div class="uk-inline select">
                Enter Shop name
                <input type="text" name="shopName" class="uk-form" style="height: 20px;width: 350px;">
            </div>
            <div class="uk-inline uk-margin-left select">
                Select Location
                <select id="location" name="loc">
                    <option value="">Select</option>
                    <option value="">Narasaraopet</option>
                    <option value="">Guntur</option>
                    <option value="">Piduguralla</option>
                    <option value="">Vinukoda</option>
                    <option value="">Chilakaluripet</option>
                    <option value="">Sattenapalli</option>
                    <option value="">Macherla</option>
                    <option value="">Gurajala</option>
                    <option value="">Vijayawada</option>
                    <option value="">Chirala</option>
                </select>
            </div>
            </div>
            <div class="space"></div><div class="space"></div>
            <div class="uk-text-center" ng-controller="orderController">
            <div class="uk-inline select">
                Brand
                <select id="brand" class="uk-button-default uk-margin-right" type="button" ng-model="brandsource" ng-options="brand for (brand, model) in brands" ng-change="GetSelectedBrand()" name="itemBrand">
                <option     >Select</option>
                </select>
            </div>
            <div class="uk-inline select">
                Select Model
                <select id="model" name="brandModel" class="uk-button-default uk-margin-right" ng-disabled="!brandsource" ng-model="modelsource" ng-options="model for (model, size) in brandsource" ng-change = "GetSelectedModel()" >
                    <option value="">Select</option>
                </select>
            </div>
            <div class="uk-inline select">
                Select Size
                <select id="size" class="uk-button-default uk-margin-right" ng-disabled="!modelsource" ng-model="size" name="itemSize"> 
                    <option value="">Select Size</option>
                    <option ng-repeat = "size in modelsource" value='{{size}}'>{{size}}</option>
                </select>
            </div>
            <div class="uk-inline select">
                No.of.Pieces
                <input type="number" name="noOfPieces" class="uk-form " style="height: 20px;">
            </div>
            </div>
            <div class="space"></div>
            <div class="uk-text-center uk-margin-top">
                <input type="submit" class="uk-button uk-button-danger"  value="Add" name="add" style="font-size: 20px;font-weight: 700;">
            </div>
            </form>
        </div>    -->
        <div class="space"></div>
        <div class="uk-text-right">
            
        </div>
        <div class="space1"></div>
        <center>
        <form action="orders.php" method="POST" class=" uk-margin-large-left uk-margin-large-right"  >
            <div class="uk-grid-small" uk-grid>
            <!-- <div class="uk-width-1-2">
                <label>Enter Shop Name</label>
            </div> -->
            <div class="uk-width-1-2@s">
                    <input type="text" name="shopName" value="<?php echo $_SESSION['name']; ?>" class="uk-input">
                </div>
                <!-- <div class="uk-width-1-2">
                <label>Enter Location</label>
            </div> -->
                <div class="uk-width-1-2@s">
                    <select  name="loc" class="uk-select ">
                                <option value="">Select</option>
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
                            </select>   
                </div>
                <div class="uk-width-1-4@s">
                    <input type="text" list="brand"  class="uk-button-default  " type="button"  name="itemBrand" placeholder=" Enter the Brand" style="height: 36px;font-weight: 800;width: 100%;">
                        <datalist id="brand">
                                        <option value="Poomex"></option>
                                        <option value="MSP"> </option>
                                        <option value="Janson"></option>
                                        <option value="Muthu"></option>
                                        <option value="Prisma"></option>
                                    </datalist>
                </div>
                <div class="uk-width-1-4@s">
                    <input type="text" list="model" name="brandModel" class="uk-button-default"  style="height: 36px;width: 100%;font-weight: 800;" placeholder=" Enter the model">
                                        <datalist id="model">
                                            <option value="Premium Rn"></option>
                                            <option value="Flexrib Rns"> </option>
                                            <option value="Golden Rn"></option>
                                            <option value="Golden Rns"></option>
                                            <option value="FlexRib Rns"></option>
                                            <option value="Cotton Shirts"></option>
                                            <option value="Capri"> </option>
                                            <option value="SlimFit"></option>
                                            <option value="Bermuda"></option>
                                            <option value="Trackpant"></option>
                                            <option value="RNS"></option>   
                                            <option value="RNBS"> </option>
                                            <option value="Remo Junior"></option>
                                            <option value="CoolCotton"></option>
                                            <option value="Single"></option>
                                            <option value="Than"></option>
                                        </datalist> 
                </div>
                <div class="uk-width-1-4@s">
                    <input type="text" list="size" class="uk-button-default uk-margin-right box" name="itemSize" style="height: 36px; font-weight: 800;width: 100%;" placeholder=" Enter the size"> 
                                    <datalist id="size">
                                    <option value="45"></option>
                                    <option value="50"> </option>
                                    <option value="55"></option>
                                    <option value="60"></option>
                                    <option value="65"></option>
                                    <option value="70"></option>
                                    <option value="75"></option>
                                    <option value="80"></option>
                                    <option value="85"></option>
                                    <option value="90"></option>
                                    <option value="95"></option>
                                    <option value="100"></option>
                                    <option value="110"></option>
                                </datalist>
                </div>
                    <div class="uk-width-1-4@s">
                    <input type="number" name="noOfPieces" class="uk-form uk-button-defaultx " style="height: 33px;font-weight: 800;width: 100%;" placeholder=" Enter the number of pieces">
                    </div>
                </div>
            </div>
            <div class="space"></div>
            <div class="uk-text-center uk-margin-top">
                <input type="submit" class="uk-button uk-button-danger"  value="Add" name="add" style="font-size: 20px;font-weight: 700;">
            </div>
        </form> 
    </center>
           <div class="space"></div><div class="space"></div><div class="space"></div>  
           <section>
            <?php
                global $connect;
                global $shop_name;

            $query = "SELECT * FROM cart_items WHERE email = '".$_SESSION['mailId']."'";
            $status1 = mysqli_query($connect,$query);
               echo '<div class="uk-container">
                   <div class="uk-text-center" style="font-size: 30px;font-weight:500;letter-spacing:2px;color:#ff0cd2;font-family: "Roboto", sans-serif;">
                       Selected Items
                   </div>
                   <div class="space"></div>
                   
                   <div class="uk-text-center">
                       <table class="uk-table">
                           <tr style="color: #ff6f02;font-size: 20px;font-weight: 500;">
                               <td>Brand </td>
                               <td>Model</td>
                               <td>Size</td>
                               <td>Pieces</td>
                               <td>Action</td>
                           </tr>';
                            if (mysqli_num_rows($status1)   ) {
                 
                                while ($row1 = mysqli_fetch_array($status1)) {
                                    $size = $row1['item_size'];
                                    $brand = $row1['brand_name'];
                                    $model= $row1['item_model'];
                                    $pieces = $row1['pieces'];
                                    $name = $row1['shopname'];
                           echo '<tr>
                                <td style="color:black;font-weight:500;">';
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

                                <form method="POST" action="orders.php" >
                                    <button type="submit" class="uk-button uk-button-primary uk-button-small " value='.$row1['s_no'].' name="btnRemove">Remove</button>
                                    
                                </form>
                                </td>
                            </tr>';
                        }
                        echo '<div class="uk-text-center" style="font-size: 22px;color:#2a78f7;font-weight: 700;">
                       Your Shop Name
                   </div>';
                    }
                    echo   '</table>
                   </div>       
               </div>';
               ?>
           </section>     

            
            <form action="orders.php" method="POST">
            <div class="uk-text-center" >
                <button class="uk-button uk-button-danger" name="placeOrder1" >ADD TO Cart</button>
            </div>
        </form>
        </div>
   

    </body>
    </html>