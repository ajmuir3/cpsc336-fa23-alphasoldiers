<!DOCTYPE html>
<html>
<head>
<title>Capacity Tracking</title>
</head>
<body>
<?php
echo "Total Customer Count";
$count = 0;
if (array_key_exists('add_customer', $_POST)) {
	add_customer()
}
else if (array_key_exists('remove_customer', $_POST)) {
	remove_customer()
}
else if (array_key_exists('reset_customer', $_POST)) {
	reset_customer()
}
function add_customer() {
	$count += 1;
	echo "$count";
}
function remove_customer() {
	$count -= 1;
	echo "$count";
}
function reset_customer() {
	$count == 0;
	echo "$count";
}
?>
<form method="post">
	<input type="submit" name="add_customer"
		class="button" value="Add Customer" />
	<input type="submit" name="remove_customer"
		class="button" value="Remove Customer" />
	<input type="submit" name="reset_custmoer"
		class="button" value="Remove Customer" />
</form>
</body>
</html>
