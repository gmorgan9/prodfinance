<?php include('functions.php'); ?>

<?php
if (isLoggedIN()) {
	header('location: /');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <link rel="icon" type="image/x-icon" href="fav.png">
</head>
<body>

<?php include("app/includes/header.php") ?>
        
<div class="auth-content">
<form method="post" action="register.php">
<h2 class="form-title">Register</h2>
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
		<button type="submit" class="log-btn" name="register_btn">Register</button>
		<a href="javascript:history.back()" name="btn" class="log-btn">Back</a>
	</div>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
</form>
</div>
</body>
</html>