<?php include('functions.php'); ?>

<?php
if (isLoggedIN()) {
	header('location: /');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <link rel="icon" type="image/x-icon" href="fav.png">
</head>
<body>

<?php include("app/includes/header.php") ?>
        
<div class="auth-content">
<form method="post" action="login.php">
<h2 class="form-title">Login</h2>
<?php echo display_error(); ?>

<div>
	<label>Username</label>
	<input class="text-input" type="text" name="username" >
</div>
<div>
	<label>Password</label>
	<input class="text-input" type="password" name="password">
</div>
<div>
	<button type="submit" class="log-btn" name="login_btn">Login</button>
</div>
<p>
	Not yet a member? <a href="register.php">Sign up</a>
</p>
</form>
</div>

</body>
</html>