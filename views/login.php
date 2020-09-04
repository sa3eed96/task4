<html>
    <head>
    <title>task4</title>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
	<script src="public/js/jquery-3.5.1.js"></script>
    <script src="public/js/login.js" root="<?php echo $_ENV['ROOT'];?>"></script>
    </head>
<body class="container">
	<div class="header">
	<h1>Login</h2>
	</div>
	<div class="form-container">	 
		<form id="loginForm">
			<div class="input">
				<label for="email">email</label>
				<input type="text" id="email" name="email">
				<p class="error"><small id="emailError"></small></p>
			</div>
			<div class="input">
				<label for="password">Password</label>
				<input type="password" id="password" name="password">
				<p class="error"><small id="passwordError"></small></p>
			</div>
			<p class="error"><small id="serverError"></small></p>
			<div class="input">
				<button class="btn" type="submit">Login</button>
			</div>
			<p>
				<a href="<?php echo $_ENV['ROOT']; ?>register.php">doesn't have an account? Register now</a>
			</p>
		</form>
	</div>
</body>
</html>