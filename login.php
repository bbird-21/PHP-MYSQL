<!-- login.php -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
</head>
<body>
	<div class="container">
		<h1>Login Form</h1>
		<form action="home.php" method="post">
			<div class="login-form">
				<label for="login" class="form-label">Login </label>
				<input type="email" class="form-control" id="login" name="email">
				<label for="password" class="form-label">Password </label>
				<input type="password" class="form-control" id="password" name="password">
				<button type="submit" class="btn btn-primary">Envoyer</button>
			</div>
	</div>
</body>
</html>