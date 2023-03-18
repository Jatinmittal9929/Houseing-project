<!DOCTYPE html>
<html>
<head>
	<title>Login and Signup</title>
		<script>
		function showPassword() {
			var passwordInput = document.getElementById("password");
			if (passwordInput.type === "password") {
				passwordInput.type = "text";
			} else {
				passwordInput.type = "password";
			}
		}
	</script>
	<style>
		body {
			background-image:url('1.jpg');
			background-repeat: repeat-x;
			background-size: 770px 770px;
			background-attachment: scroll;
		}
		.container {
			background: linear-gradient(45deg, #ef65ff, #65fff4);
			margin: 10% auto;
			width: 50%;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.3);
		}
		h2 {
			text-align: center;
			color: #333;
		}
		input[type="text"], input[type="password"], input[type="email"] {
			width: 100%;
			padding: 12px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			margin-top: 6px;
			margin-bottom: 16px;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background-color: #45a049;
		}
		.signup-link {
			display: block;
			text-align: center;
			margin-top: 12px;
			color: #333;
		}
		.signup-link a {
			color: #4CAF50;
			text-decoration: none;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<div class="container">
		<h3>Login</h3>
		<form action="" method="post">
			<label for="username">Username</label>
			<input type="text" id="username" name="username" required>
			<label for="password">Password</label>
			<input type="password" id="password" name="password" required>
			<label>
			<input type="checkbox" onclick="showPassword()">
			Show Password
			</label><br><br>
			<input type="submit" value="Login">
			<span class="signup-link">Don't have an account? <a href="signup.php">Sign up</a></span>
		</form>
	</div>
</body>
</html>
