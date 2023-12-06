<!DOCTYPE html>  
<html>
                
<head>
        <title>  
                Capacity Tracking
        </title>
</head>
<style>
    h1 {color: rgb(210, 45, 45);
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;}
</style>
                        
<body style="text-align:center;">   
                 
        <h1>
                Total Customer Count
        </h1>
        
	<?php

	include ('connect.php');

	session_start();
	
	if (isset($_POST['button1'])) {
		$_SESSION['count'] += 1;
	}
	else if (isset($_POST['button2'])) {
		if ($_SESSION['count'] > 0) {
			$_SESSION['count'] -= 1;
		}
	}
	else if (isset($_POST['button3'])) {
		$_SESSION['count'] = 0;
	}
	
	echo($_SESSION['count']);
	?>
     
    <form action="" method="post">
    	<input type="submit" name="button1" value="Add Customer">
		<input type="submit" name="button2" value="Remove Customer">
		<input type="submit" name="button3" value="Reset Customer">
    </form>
	
	
</body>
                
</html>
