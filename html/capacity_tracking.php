<!DOCTYPE html>  
<html>
                
<head>
        <title>  
                Capacity Tracking
        </title>
</head>
                        
<body style="text-align:center;">   
                 
        <h4>
                Total Customer Count
        </h4>
        
	<style>
		spam{font-size:100;}
	<?php
	session_start();
	include 'connect.php';
	$conn = OpenCon();
	if (isset($_POST['button1'])) {
		$sql = "UPDATE currentCount SET count = count + 1";
		$conn->query($sql);
	}
	else if (isset($_POST['button2'])) {
		$sql = "UPDATE currentCount SET count = count - 1";
                $conn->query($sql);
	}
	else if (isset($_POST['button3'])) {
		$sql = "UPDATE currentCount SET count = 0";
                $conn->query($sql);
	}
	$getCount = 'SELECT count FROM currentCount';
	$query = mysqli_query($conn,$getCount);
	<span>
		echo(mysqli_fetch_assoc($query)['count']);
	</span>
	?>
     	</style>
        <form action="" method="post">
        <input type="submit" name="button1" value="Add Customer">
	<input type="submit" name="button2" value="Remove Customer">
	<input type="submit" name="button3" value="Reset Customer">
        </form>
	
	
</body>
                
</html>
