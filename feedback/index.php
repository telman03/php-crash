<!DOCTYPE html>
<html lang="en">
<head>
	<title>GFG- Store Data</title>
</head>
<body>
		<h1>Storing Form data in Database</h1>
		<form action="insert.php" method="post">
			
      <p>
			<label for="firstName">First Name:</label>
			<input type="text" name="first_name" id="firstName">
			</p>

			
      <p>
			<label for="lastName">Last Name:</label>
			<input type="text" name="last_name" id="lastName">
			</p>
			
      <p>
			<label for="emailAddress">Email Address:</label>
			<input type="text" name="email" id="emailAddress">
			</p>

      <p>
			<label for="body">Message:</label>
      <textarea id="body" name="body"></textarea>
			</p>

			<input type="submit" value="Submit">
		</form>
</body>
</html>
