<?php include('functions.php'); ?>

<?php
if (isLoggedIN()) {
	header('location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
</head>
<body>
	<div class="log-header">
		<h2>Login</h2>
	</div>
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="log-btn" name="login_btn">Login</button>
			<a href="javascript:history.back()" name="btn" class="log-btn" >Back</a>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>
</body>
</html>