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
        
	<?php
	include ('connect.php');
	session_start();
	
	if (isset($_POST['button1'])) {
		$_SESSION['custCount'] += 1;
	}
	else if (isset($_POST['button2'])) {
		if ($_SESSION['custCount'] > 0) {
			$_SESSION['custCount'] -= 1;
		}
	}
	else if (isset($_POST['button3'])) {
		$_SESSION['custCount'] = 0;
	}
	
	echo($_SESSION['custCount']);
	?>
     
        <form action="" method="post">
        <input type="submit" name="button1" value="Add Customer">
	<input type="submit" name="button2" value="Remove Customer">
	<input type="submit" name="button3" value="Reset Customer">
        </form>
	
	
</body>
                
</html>
