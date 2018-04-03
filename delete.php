<?php 
	global $connect;
	include('dbConnect.php');
	// if(isset($_POST['ok']))
	// {
		$query = "SELECT * FROM cart_items WHERE email = '".$_SESSION['mailId']. "'";
		$query_status = mysqli_query($connect, $query);
		if (mysqli_num_rows($query_status)) {
			while($row1 = mysqli_fetch_array($query_status))
			{
				$size= $row1['item_size'];
				$brand=$row1['brand_name'];
				$model= $row1['item_model'];
				$pieces = $row1['pieces'];
				$name = $row1['shopname'];
				$s_no =  $row1['s_no'];
				$delete_query = " DELETE * FROM cart_items WHERE s_no = '$s_no' ";
				echo $delete_query;	
				$delete_status = mysqli_query($connect, $delete_query);
				if ($delete_status) {
					echo "deleted successfully";
				}
				else
				{
					echo "not deleted successfully";
				}
			}
		}
	// }
?>