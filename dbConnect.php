<?php session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "poomex";
$connect = mysqli_connect($servername,$username,$password,$db);
if($connect)
{
	// echo "database connected";
}
else{
	echo "database not connected";
}
//code for registration
$error = false;
if (isset($_POST['register'])) {
	$fullname = mysqli_real_escape_string($connect, $_POST['fullname']);
	$email = mysqli_real_escape_string($connect, $_POST['email']);
	$shopname= mysqli_real_escape_string($connect, $_POST['shopname']);
	$location = mysqli_real_escape_string($connect, $_POST['location']);
	$mobile = mysqli_real_escape_string($connect, $_POST['mobile']);
	$dob = mysqli_real_escape_string($connect, $_POST['dob']);
	$password = mysqli_real_escape_string($connect, $_POST['password']);
	$confirm_pass = mysqli_real_escape_string($connect, $_POST['confpass']);
	if ($password!=$confirm_pass) {
				$error= true;
				 echo "<script> alert('password and confirmpassword not matched') 
				 window.location.href = 'signIn.php';</script>";

			}
	if (!preg_match('/^[0-9]{10}+$/', $mobile)) {
		$error = true;
		echo "<script> alert('Please enter the valid phone number') 
				 window.location.href = 'registration.php';</script>";
	}
	if ($_POST['location'] =="") {
		$error = true;
		echo "<script> alert('Please enter the locationr') 
				 window.location.href = 'registration.php';</script>";	
	}
	if (!$error) {
		if (mysqli_query($connect, "INSERT INTO user_info (fullname, email, shopname, location, mobile, dob, password) VALUES ('$fullname', '$email', '$shopname', 'location', '$mobile', '$dob', '$password') ") ) {
			
			echo "<script>alert('registered succesfully') </script>";
		}
		else
		{
			echo "<script>alert('Not registered succesfully') </script>";
		}
	}

}
//code for login
if (isset($_POST['submit'])) {
        
        $email=mysqli_real_escape_string($connect,$_POST['email']);
        $password = mysqli_real_escape_string($connect,$_POST['password']);
        if ($email == 'admin' && $password=='admin')  {
        		
        		echo "<script>alert('login successfull');
        		window.location.href='admin.php';</script>";
        }
        
        $find= "SELECT * FROM user_info WHERE email = '$email' AND password = '$password'";
        $status = mysqli_query($connect,$find);
        if (mysqli_num_rows($status) == 1) {
        	while ($row = mysqli_fetch_array($status)) {
        		$_SESSION['mailId'] = $row['email'];
            	$_SESSION['name'] = $row['shopname'];
            	$shoper = $row['shopname'];
        	}         
             echo "<script> alert('Login successfully ')
             window.location.href= 'orders.php'
             </script>";
         } 
         else {
             echo "<script> alert('Enter valid credentials')</script>";
         }

    }
 //change passwordphase
   
   if (isset($_POST['pass'])) {
   	$email= mysqli_real_escape_string($connect, $_POST['email']);
   	$dob = mysqli_real_escape_string($connect, $_POST['dob']);
   	$newpass=mysqli_real_escape_string($connect,$_POST['newpass']);
   	$confnew=mysqli_real_escape_string($connect,$_POST['confnew']);
   	if(!strcmp($newpass, $confnew)) {
   		$query = "SELECT * FROM user_info WHERE email = '$email' AND dob = '$dob' ";
   		$status = mysqli_query($connect, $query);
   		if(mysqli_num_rows($status) == 1) {
		   	$query = "UPDATE user_info SET password = '".$newpass."' WHERE email = '".$email."' ";
		   	$status = mysqli_query($connect,$query);
		   	if ($status) {
		   		echo "<script> alert('Your password changed succesfully')
		   			window.location.href= 'signIn.php'
		   		</script>";
		   	} else {
		   		echo "database error";
		   	}
		} else {
			echo "<script>alert('provide valid information')</script> ";
		}
   	} else {
   		echo "<script>alert('Password should match')</script>";
   	}

   } 

$error = false;

if (isset($_POST['add'])) {
	
	$shopname = mysqli_real_escape_string($connect, $_POST['shopName']);
	$location = mysqli_real_escape_string($connect, $_POST['loc']);
	$brand_name = mysqli_real_escape_string($connect, $_POST['itemBrand']);
	$item_model = mysqli_real_escape_string($connect, $_POST['brandModel']);
	$item_size = mysqli_real_escape_string($connect, $_POST['itemSize']);
	$pieces =  mysqli_real_escape_string($connect, $_POST['noOfPieces']);
	if (!$error) {
		if (mysqli_query($connect, "INSERT INTO cart_items (email, shopname, location, brand_name, item_model, item_size, pieces, order_date) VALUES ('".$_SESSION['mailId']. "', '$shopname', '$location', '$brand_name', '$item_model', '$item_size',  '$pieces', NOW())")) {
			echo "<script>alert('Values inserted') </script>";
		}
		else
		{
			echo "<script>alert('Values not inserted') </script>";
		}
	}

}
//code for remove button
if (isset($_POST['btnRemove'])) {
	
	$query = "DELETE FROM cart_items WHERE s_no = ". $_POST['btnRemove'];
	$status = mysqli_query($connect, $query);
	if ($status) {
		echo "<script>alert('Values deleted')
			window.location.href='orders.php'
		 </script>";
	}
}

//***************************************************************************************************
//get the single information of user

// function getUserInfo($email) {
// 	$query = "SELECT * FROM user_info WHERE email = '$email'";
// 	$status = mysqli_query($connect, $query);
// 	if(mysqli_num_rows($staus))
// 		$row = mysqli_fetch_array($status);

// 	return $row;
// }
//***************************************************************************************************
//code for place order
// if (isset($_POST['placeOrder'])) {
	
// 	$email = $_POST['placeOrder'];
	

// 	$query = "SELECT * FROM cart_items WHERE email = '$email' ";
//     $status_cart = mysqli_query($connect,$query);

//     if (mysqli_num_rows($status_cart)   ) {

//         $user_info = getUserInfo($email);
        
//         $bill_query = "INSERT INTO bill_table (shop_name, mobile, email, bill_date) VALUES
//         				(
//         				 '" . $user_info['shop_name'] ."',
//         				 '". $user_info['mobile'] . "',
//         				 '".$user_info['email']."', NOW()
//         				)";

//         $bill_status = mysqli_query($connect, $bill_query);
//         $bill_id = mysqli_insert_id($bill_id);

//         while ($row1 = mysqli_fetch_array($status_cart)) {
//             $size = $row1['item_size'];
//             $brand = $row1['brand_name'];
//             $model= $row1['item_model'];
//             $pieces = $row1['pieces'];
//             $name = $row1['shopname'];

//             // INSERT INTO orderhistory ()
//             $order_query = "INSERT INTO order_details(bill_id, brand, model, size, pieces, order_date) VALUES($bill_id, '$brand', '$model', '$size', '$pieces', NOW())";
//             $order_query = mysqli_query($connect, $order_query);
//             //deleting cart table
//             $delete = "DELETE * FROM cart_items WHERE s_no = '$s_no'";
//             $delete_query = mysqli_query($connect,$delete);

// 		}
//    	}        
   	  
	
	// echo $query;
// }
function getUserInfo($email)
{
	global $connect;
	$query = "SELECT * FROM user_info WHERE email='$email'";
	$status = mysqli_query($connect,$query);
	if (mysqli_num_rows($status)) {
		$row = mysqli_fetch_array($status);
		return $row;
	}
}
if (isset($_POST['placeOrder1'])) {
	echo "<script> alert('Click Ok to procced to cart page');
			window.location.href='cart.php';
		 </script>";
}
// else {
// 	echo "<script> alert('You have no items in cart');
// 		 </script>";
// }
if (isset($_POST['placeOrder'])) {
		
		
		$query = "SELECT * FROM cart_items WHERE email = '".$_SESSION['mailId']. "'";
		$status_cart = mysqli_query($connect,$query);
		if (mysqli_num_rows($status_cart)) {
			$user_info = getUserInfo($_SESSION['mailId']);
			$bill_query = "INSERT INTO bill_table (shop_name,location,mobile,email,bill_date) VALUES(

							'" . $user_info['shopname'] ."',
							'" . $user_info['location'] ."',
	         				 '". $user_info['mobile'] . "',
	           				 '".$user_info['email']."', NOW()

								) ";
			$bill_status= mysqli_query($connect,$bill_query);
			$bill_id = mysqli_insert_id($connect);

			while ($row1 = mysqli_fetch_array($status_cart)) {
				$size= $row1['item_size'];
				$brand=$row1['brand_name'];
				$model= $row1['item_model'];
				$location = $row1['location'];
				$pieces = $row1['pieces'];
				$name = $row1['shopname'];
				$s_no =  $row1['s_no'];
				$date = $row1['order_date'];
				$order_query = "INSERT INTO order_details(shopname,bill_id, brand, model, size, pieces, location, order_date) VALUES('$name', '$bill_id', '$brand', '$model', '$size', '$pieces', '$location', NOW()) ";
				$order_status = mysqli_query($connect,$order_query);
				if ($order_status) {
					
					echo "<script> alert('You have succesfully place the order');
						 </script>";
				}
				$delete_item = "DELETE  FROM cart_items WHERE s_no = '$s_no' ";
				$delete_query = mysqli_query($connect,$delete_item);
			}
		}
}	
////Order transactions
if (isset($_POST['order'])) {
	
	$order_query = "SELECT * FROM order_details WHERE shopname = 'nani' ";
	echo $order_query;
	$order_status= mysqli_query($connect,$order_query);
}
// code for order view of a user
// if (isset($_POST['orderBill'])) {
//  	$order_view = "SELECT * FROM order_details WHERE shopname = '".$_SESSION['name']. "'";
//  	echo $order_view;
//  	$orderview_status = mysqli_query($connect,$order_view);
//  	if(mysqli_num_rows($order_status))
//  	{
//  		while ($row = mysqli_fetch_array($orderview_status)) {
//  			$Oshop =$row['shopname'];
//  			$Obill = $row['bill_id'];
//  			$Obrand = $row['brand'];
//  			$Omodel = $row['model'];
//  			$Osize = $row['size'];
//  			$Opieces = $row['pieces'];
//  			$Odate = $row['order_date'];
//  			echo $Obrand;
//  		}
//  	}
//  } 
//code for logout
if (isset($_POST['logout'])) {
	unset($_SESSION['mailId']);
	unset($_SESSION['name']);
  	 header("Location:signIn.php" );
}
//code for front form
$error = false;
if (isset($_POST['frontButton'])) {
		$name= mysqli_real_escape_string($connect, $_POST['frontName']);
		$email = mysqli_real_escape_string($connect, $_POST['frontEMail']);
		$subject= mysqli_real_escape_string($connect, $_POST['frontSubject']);
		$message= mysqli_real_escape_string($connect, $_POST['frontText']);
			if (!$error) {
				if (mysqli_query($connect, "INSERT INTO user_queries (name, email, subject, message) VALUES ('$name', '$email', '$subject', 'message') ") ) {
					
					echo "<script>alert('Your details have been recorderd') </script>";
				}
				else
				{
					echo "<script>alert('Please enter the feilds correctly') </script>";
				}
			}
	}

//  code for admin panel
if (isset($_POST['btnViewDate'])) {
	$date_query = "SELECT * FROM bill_table WHERE bill_date = '" . $_POST['order_date'] . "'";
	echo $date_query;
    $date_status = mysqli_query($connect,$date_query);
    if (mysqli_num_rows($date_status)) {
    	while ($row2 = mysqli_fetch_array($date_status)) {
    		$billdate = $row2['bill_date'];
    		$shopDate = $row2['shop_name'];
    		echo $shopDate;
    	}
    	
    }
}
?>



