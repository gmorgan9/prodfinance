<?php include('functions.php'); ?>

<?php
if (isLoggedIN()) {
	header('location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta name="viewport" content="width=device-width">
	<style>
		:root {
			--primary-color: #002E5D;
			--secondary-color: #002f5dc7;
			--red-background: #f2dede;
			--red-text: #a94442;
			--green-text: #3c763d;
			--green-background: #dff0d8;
		}
        * { 
	        margin: 0px; 
	        padding: 0px; 
            box-sizing: border-box;
        }
        body {
	        font-size: 120%;
	        background: #F8F8FF;
        }  
		.main-content p {
			margin-left: 35px;
		}
		.header {
			width: 40%;
			margin: 50px auto 0px;
			color: white;
			background-color: var(--primary-color);
			text-align: center;
			border: 1px solid #B0C4DE;
			border-bottom: none;
			border-radius: 10px 10px 0px 0px;
			padding: 20px;
		}
		form, .content {
			width: 40%;
			margin: 0px auto;
			padding: 20px;
			border: 1px solid #B0C4DE;
			background: white;
			border-radius: 0px 0px 10px 10px;
		}
		.input-group {
			margin: 10px 0px 10px 0px;
		}
		.input-group label {
			display: block;
			text-align: left;
			margin: 3px;
		}
		.input-group input {
			height: 30px;
			width: 93%;
			padding: 5px 10px;
			font-size: 16px;
			border-radius: 5px;
			border: 1px solid gray;
		}
		.btn {
			padding: 10px;
			font-size: 15px;
			color: white;
			background-color: var(--secondary-color);
			border: none;
			border-radius: 5px;
			cursor: pointer;
			text-decoration: none;
		}
		#user_type {
			height: 40px;
			width: 98%;
			padding: 5px 10px;
			background: white;
			font-size: 16px;
			border-radius: 5px;
			border: 1px solid gray;
		}
		.error {
			width: 92%; 
			margin: 0px auto; 
			padding: 10px; 
			border: 1px solid var(--red-text); 
			color: var(--red-text); 
			background: var(--red-background); 
			border-radius: 5px; 
			text-align: left;
		}
		.success {
			color: var(--green-text); 
			background: var(--green-background); 
			border: 1px solid var(--green-text);
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
<div class="header">
	<h2>Register</h2>
</div>
<form method="post" action="register.php">
<?php echo display_error(); ?>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
		<a href="javascript:history.back()" name="btn" class="btn">Back</a>
	</div>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
</form>
</body>
</html>
