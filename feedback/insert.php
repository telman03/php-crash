
<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<?php

	$conn = mysqli_connect("localhost", "root", "", "php_dev");

	// Check connection
	if($conn === false){
		die("ERROR: Could not connect. "
			. mysqli_connect_error());
	}

	// Taking all 5 values from the form data(input)
	$first_name = $_REQUEST['first_name'];
	$last_name = $_REQUEST['last_name'];
	$email = $_REQUEST['email'];
	$body = $_REQUEST['body'];
	$sql = "INSERT INTO feedback VALUES ('$first_name', '$last_name','$email', '$body')";

	if(mysqli_query($conn, $sql)){
		echo "<h3>data stored in a database successfully."
			. " Please browse your localhost php my admin"
			. " to view the updated data</h3>";

		echo nl2br("\n$first_name\n $last_name\n $email\n $body\n");
	} else{
		echo "ERROR: Hush! Sorry $sql. "
			. mysqli_error($conn);
	}

	// Close connection
	mysqli_close($conn);
	?>
</body>

</html>
