<!DOCTYPE html>
<html lang="en">
<head>
	<title>GFG- Store Data</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<!-- <form action="insert.php" method="post">
		
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
		
	</form> -->

<!-- --------------------------------------------------------- -->
	<div class="container">
	<h1>Storing Form data in Database</h1>

		<form action="insert.php" mothod="post">
				<div class="form-row">
					<div class="col">
					<input type="text" class="form-control"  name="first_name" placeholder="First name">
					</div>
					<div class="col">
					<input type="text" class="form-control" name="last_name" placeholder="Last name">
					</div>
				</div>
				<div class="form-group">
					<label for="exampleFormControlInput1">Email address</label>
					<input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com">
				</div>
				<div class="form-group">
					<label for="exampleFormControlTextarea1">Example textarea</label>
					<textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3"></textarea>
				</div>
				<button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
		</form>
	</div>
	


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
